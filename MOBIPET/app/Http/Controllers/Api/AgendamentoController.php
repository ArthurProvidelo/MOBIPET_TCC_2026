<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Agendamento;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Validation\ValidationException;

class AgendamentoController extends Controller
{
    /**
     * Progressão de status usada pela esteira de atendimento do app mobile,
     * espelhando as opções do painel do funcionário (painel-controle.blade.php).
     */
    private const ETAPAS = ['Pendente', 'Em atendimento', 'Concluido'];

    /**
     * Janela padrão (em minutos) usada por index(): só entram na listagem os
     * agendamentos cujo horário marcado está a, no máximo, N minutos do momento
     * atual — antes ou depois. Pode ser sobrescrita via ?janela=.
     */
    private const JANELA_MINUTOS = 30;

    /**
     * Fuso em que data_agendamento + horario são gravados pelo formulário web
     * (o app roda em UTC). Comparar "agora" nesse fuso evita o deslocamento de
     * horas ao montar a janela de proximidade.
     */
    private const FUSO_HORARIO = 'America/Sao_Paulo';

    /**
     * Listagem consumida pelo app (GET /agendamentos -> AgendamentoRepository.listar()).
     *
     * Retorna um array JSON puro (sem envelope) de agendamentos do cliente
     * autenticado, ordenados por data/horário.
     *
     * Por padrão só entram os que estão a até ?janela minutos (padrão: 30) do
     * horário atual — para mais ou para menos. Com ?todos=1 a janela é
     * ignorada e vem o histórico completo do cliente (qualquer status), que é
     * o que a tela de Agendamentos do app usa para exibir/cancelar/excluir.
     */
    public function index(Request $request)
    {
        $petIds = $request->user()->pets()->pluck('id_pet');

        $query = Agendamento::whereIn('fk_id_pet', $petIds)
            ->with(['pet', 'servico', 'funcionario'])
            ->orderBy('data_agendamento')
            ->orderBy('horario');

        if (!$request->boolean('todos')) {
            $janela = (int) $request->query('janela', self::JANELA_MINUTOS);
            $janela = max(1, min($janela, 1440));

            $agora  = Carbon::now(self::FUSO_HORARIO);
            $inicio = $agora->copy()->subMinutes($janela)->format('Y-m-d H:i:s');
            $fim    = $agora->copy()->addMinutes($janela)->format('Y-m-d H:i:s');

            $query->whereRaw('TIMESTAMP(data_agendamento, horario) BETWEEN ? AND ?', [$inicio, $fim]);
        }

        return response()->json($query->get());
    }

    /**
     * GET /agendamentos/proximos
     *
     * Agendamentos do cliente autenticado que começam da hora atual até 30
     * minutos à frente (janela só para o futuro, ao contrário de index() que
     * também inclui os 30 minutos anteriores). Útil para lembretes/alertas de
     * "seu horário está chegando". A janela pode ser ajustada via ?janela=.
     */
    public function proximos(Request $request)
    {
        $janela = (int) $request->query('janela', self::JANELA_MINUTOS);
        $janela = max(1, min($janela, 1440));

        $agora = Carbon::now(self::FUSO_HORARIO);
        $ate   = $agora->copy()->addMinutes($janela);

        $petIds = $request->user()->pets()->pluck('id_pet');

        $agendamentos = Agendamento::whereIn('fk_id_pet', $petIds)
            ->whereRaw('TIMESTAMP(data_agendamento, horario) BETWEEN ? AND ?', [
                $agora->format('Y-m-d H:i:s'),
                $ate->format('Y-m-d H:i:s'),
            ])
            ->with(['pet', 'servico', 'funcionario'])
            ->orderBy('data_agendamento')
            ->orderBy('horario')
            ->get();

        return response()->json($agendamentos);
    }

    /**
     * Mesma listagem de index(), mas recebendo o id do cliente explicitamente
     * na URL. O id da rota precisa bater com o dono do token (Sanctum) —
     * caso contrário qualquer token válido poderia listar agendamentos de
     * outro cliente.
     */
    public function porCliente(Request $request, int $id)
    {
        abort_if((int) $request->user()->id_cliente !== $id, 403, 'Você não tem acesso aos agendamentos deste cliente.');

        return $this->index($request);
    }

    /**
     * Agendamento "atual" do cliente para a Home do app: o que já está em
     * atendimento (status "Em atendimento") ou, na falta desse, o próximo pendente.
     */
    public function atual(Request $request)
    {
        $petIds = $request->user()->pets()->pluck('id_pet');

        $agendamento = Agendamento::whereIn('fk_id_pet', $petIds)
            ->where('status_agendamento', 'Em atendimento')
            ->with(['pet', 'servico', 'funcionario'])
            ->latest('id_agendamento')
            ->first();

        if (!$agendamento) {
            $agendamento = Agendamento::whereIn('fk_id_pet', $petIds)
                ->where('status_agendamento', 'Pendente')
                ->with(['pet', 'servico', 'funcionario'])
                ->orderBy('data_agendamento')
                ->orderBy('horario')
                ->first();
        }

        return response()->json(['agendamento' => $agendamento]);
    }

    /**
     * Check-in: inicia o atendimento de um agendamento já existente
     * (equivalente ao antigo POST /atendimentos, hoje disparado pelo
     * leitor RFID/ESP32 na recepção; por ora o app mobile aciona direto).
     */
    public function iniciar(Request $request, int $id)
    {
        $petIds = $request->user()->pets()->pluck('id_pet');

        $agendamento = Agendamento::whereIn('fk_id_pet', $petIds)->where('id_agendamento', $id)->first();
        abort_if(!$agendamento, 404, 'Agendamento não encontrado.');
        abort_if($agendamento->status_agendamento !== 'Pendente', 422, 'Este agendamento não está pendente.');

        $agendamento->update(['status_agendamento' => 'Em atendimento']);

        return response()->json($agendamento->fresh(['pet', 'servico', 'funcionario']));
    }

    /**
     * Avança o agendamento para a próxima etapa da esteira (Pendente ->
     * Em atendimento -> Concluido).
     */
    public function avancar(Request $request, int $id)
    {
        $petIds = $request->user()->pets()->pluck('id_pet');

        $agendamento = Agendamento::whereIn('fk_id_pet', $petIds)->where('id_agendamento', $id)->first();
        abort_if(!$agendamento, 404, 'Agendamento não encontrado.');

        $indiceAtual = array_search($agendamento->status_agendamento, self::ETAPAS, true);
        abort_if($indiceAtual === false || !isset(self::ETAPAS[$indiceAtual + 1]), 422, 'Não há próxima etapa.');

        $agendamento->update(['status_agendamento' => self::ETAPAS[$indiceAtual + 1]]);

        return response()->json($agendamento->fresh(['pet', 'servico', 'funcionario']));
    }

    /**
     * Rota pública (sem token) para o leitor RFID/ESP32: recebe {"pet_id": 33},
     * onde 33 é o id do pet gravado no cartão. Localiza o agendamento do dia
     * (data_agendamento = hoje) daquele pet que ainda não foi concluído nem
     * cancelado — o mais antigo pelo horário, se houver mais de um — e avança
     * para a próxima etapa da esteira (Pendente -> Em atendimento -> Concluido).
     *
     * Sempre responde em JSON com uma mensagem clara: quem lê a resposta é o
     * ESP32, que só exibe o texto no Monitor Serial.
     */
    public function avancarPorPet(Request $request)
    {
        try {
            $dados = $request->validate([
                'pet_id' => 'required|integer|exists:Pet,id_pet',
            ], [
                'pet_id.required' => 'Informe o pet_id do cartão.',
                'pet_id.integer' => 'pet_id inválido.',
                'pet_id.exists' => 'Pet não encontrado.',
            ]);
        } catch (ValidationException $e) {
            return response()->json([
                'success' => false,
                'mensagem' => collect($e->errors())->flatten()->first(),
            ], 422);
        }

        // Etapas que ainda contam como "pendente" (tudo antes da última do fluxo).
        $etapasEmAberto = array_slice(self::ETAPAS, 0, -1);

        $agendamento = Agendamento::where('fk_id_pet', $dados['pet_id'])
            ->where('data_agendamento', Carbon::today()->toDateString())
            ->whereIn('status_agendamento', $etapasEmAberto)
            ->orderBy('horario')
            ->orderBy('id_agendamento')
            ->with('pet')
            ->first();

        if (!$agendamento) {
            return response()->json([
                'success' => false,
                'mensagem' => 'Nenhum agendamento pendente para este pet hoje (pode já estar concluído, cancelado ou não existir).',
            ], 404);
        }

        $indiceAtual = array_search($agendamento->status_agendamento, self::ETAPAS, true);

        if ($indiceAtual === false || !isset(self::ETAPAS[$indiceAtual + 1])) {
            return response()->json([
                'success' => false,
                'mensagem' => 'Este agendamento já foi concluído.',
            ], 422);
        }

        $etapaAnterior = $agendamento->status_agendamento;
        $proximaEtapa = self::ETAPAS[$indiceAtual + 1];

        $agendamento->update(['status_agendamento' => $proximaEtapa]);

        $nomePet = $agendamento->pet->nome ?? "pet {$agendamento->fk_id_pet}";

        return response()->json([
            'success' => true,
            'mensagem' => "{$nomePet}: {$etapaAnterior} -> {$proximaEtapa}",
            'id_agendamento' => $agendamento->id_agendamento,
            'pet_id' => $agendamento->fk_id_pet,
            'etapa_anterior' => $etapaAnterior,
            'etapa_atual' => $proximaEtapa,
        ]);
    }

    public function store(Request $request)
    {
        $dados = $request->validate([
            'fk_id_pet' => 'required|exists:Pet,id_pet',
            'fk_id_servico' => 'required|exists:Servico,id_servico',
            'fk_id_funcionario' => 'required|exists:Funcionario,id_funcionario',
            'data_agendamento' => 'required|date',
            'horario' => 'required',
            'observacao' => 'nullable|string',
        ]);

        $petValido = $request->user()->pets()->where('id_pet', $dados['fk_id_pet'])->exists();
        abort_if(!$petValido, 403, 'Este pet não pertence à sua conta.');

        $agendamento = Agendamento::create([
            ...$dados,
            'status_agendamento' => 'Pendente',
        ]);

        return response()->json($agendamento->load(['pet', 'servico', 'funcionario']), 201);
    }

    public function cancelar(Request $request, int $id)
    {
        $petIds = $request->user()->pets()->pluck('id_pet');

        $agendamento = Agendamento::whereIn('fk_id_pet', $petIds)->where('id_agendamento', $id)->first();
        abort_if(!$agendamento, 404, 'Agendamento não encontrado.');

        $agendamento->update(['status_agendamento' => 'Cancelado']);

        return response()->json($agendamento->load(['pet', 'servico', 'funcionario']));
    }

    /**
     * Exclui um agendamento do cliente autenticado. Usado pelo app para
     * limpar do histórico agendamentos já finalizados (Concluido) ou
     * cancelados. Agendamentos em atendimento não podem ser excluídos.
     */
    public function destroy(Request $request, int $id)
    {
        $petIds = $request->user()->pets()->pluck('id_pet');

        $agendamento = Agendamento::whereIn('fk_id_pet', $petIds)->where('id_agendamento', $id)->first();
        abort_if(!$agendamento, 404, 'Agendamento não encontrado.');
        abort_if($agendamento->status_agendamento === 'Em atendimento', 422, 'Um agendamento em andamento não pode ser excluído.');

        $agendamento->delete();

        return response()->json(['mensagem' => 'Agendamento excluído.']);
    }
}
