<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Agendamento;
use App\Models\Pet;
use App\Models\Servico;
use App\Models\Funcionario;
use Illuminate\Support\Facades\Session;
use Carbon\Carbon;
use Illuminate\Support\Facades\Log;

class AgendamentoController extends Controller
{
    /**
     * Nomes dos meses em português (evita depender de locale do sistema/Carbon).
     */
    private const MESES = [
        1  => 'Janeiro',   2  => 'Fevereiro', 3  => 'Março',
        4  => 'Abril',     5  => 'Maio',      6  => 'Junho',
        7  => 'Julho',     8  => 'Agosto',    9  => 'Setembro',
        10 => 'Outubro',   11 => 'Novembro',  12 => 'Dezembro',
    ];

    /**
     * Nomes dos dias da semana em português.
     * Carbon::dayOfWeek: 0 = domingo ... 6 = sábado.
     */
    private const DIAS_SEMANA = [
        0 => 'Domingo', 1 => 'Segunda', 2 => 'Terça',
        3 => 'Quarta',  4 => 'Quinta',  5 => 'Sexta', 6 => 'Sábado',
    ];

    /**
     * Mapeia o texto livre salvo em status_agendamento para as chaves
     * que o Blade/CSS reconhecem: agendado | andamento | concluido | cancelado.
     */
    private const STATUS_MAP = [
        'pendente'       => 'agendado',
        'agendado'       => 'agendado',
        'confirmado'     => 'agendado',
        'em andamento'   => 'andamento',
        'andamento'      => 'andamento',
        'em atendimento' => 'andamento',
        'concluido'      => 'concluido',
        'finalizado'     => 'concluido',
        'cancelado'      => 'cancelado',
    ];

    public function index()
    {
        $agendamentos = Agendamento::all();
        return view('agendamentos.index', compact('agendamentos'));
    }

    public function create()
    {
        if (!session()->has('id')) {
            return redirect()->route('login');
        }

        $clienteId = Session::get('id');
        $pets = Pet::where('fk_id_cliente', $clienteId)->get();
        $funcionarios = Funcionario::all();
        $servicos = Servico::all();

        return view('agendamentos.create', compact('pets', 'funcionarios', 'servicos'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'fk_id_pet' => 'required|exists:Pet,id_pet',
            'fk_id_servico' => 'required|exists:Servico,id_servico',
            'fk_id_funcionario' => 'required|exists:Funcionario,id_funcionario',
            'data_agendamento' => 'required|date',
            'horario' => 'required',
            'observacoes' => 'required'
        ]);

        Agendamento::create([
            'data_agendamento' => $request->data_agendamento,
            'horario' => $request->horario,
            'status_agendamento' => 'Pendente',

            'fk_id_pet' => $request->fk_id_pet,
            'fk_id_servico' => $request->fk_id_servico,
            'fk_id_funcionario' => $request->fk_id_funcionario,
            'observacao' => $request->observacoes
        ]);

        return redirect()
            ->route('agendamento')
            ->with('success', 'Agendamento realizado com sucesso!');
    }

    public function show($id)
    {
        $agendamento = Agendamento::findOrFail($id);
        return view('agendamentos.show', compact('agendamento'));
    }

    public function edit($id)
    {
        $agendamento = Agendamento::findOrFail($id);
        return view('agendamentos.edit', compact('agendamento'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nome_tutor' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'telefone' => 'required|string|max:20',
            'nome_pet' => 'required|string|max:255',
            'tipo_pet' => 'required|string|max:100',
            'profissional' => 'required|string|max:255',
            'servico' => 'required|string|max:255',
            'data' => 'required|date',
            'hora' => 'required',
        ]);

        $agendamento = Agendamento::findOrFail($id);
        $agendamento->update($request->all());
        return redirect()->route('agendamento')->with('success', 'Agendamento atualizado com sucesso!');
    }

    public function destroy($id)
    {
        $agendamento = Agendamento::findOrFail($id);
        $agendamento->delete();
        return redirect()->route('agendamento')->with('success', 'Agendamento excluído com sucesso!');
    }

    /**
     * Tela de agenda no estilo "Calendário do iPhone" (mês > dia > agendamentos)
     * para uso do funcionário.
     */
    public function agendamentosFuncionario()
    {
        if(!session()->has('id') || session('nivel_acesso') != 'FUNCIONARIO')
        {
            return redirect()->route('login.funcionario');
        }

        $agendamentos = Agendamento::with([
            'pet.cliente',
            'servico',
            'funcionario'
        ])
        ->orderBy('data_agendamento')
        ->orderBy('horario')
        ->get();

        $agenda = $this->agruparAgendamentos($agendamentos);

        return view(
            'funcionario.agendamentos',
            compact('agenda')
        );
    }

    /**
     * Agrupa a coleção de Agendamentos em:
     * ['Mês Ano' => ['total_agendamentos' => int, 'dias' => [ [data, dia_semana, dia, agendamentos[]] ]]]
     */
    private function agruparAgendamentos($agendamentos): array
    {
        $agenda = [];

        foreach ($agendamentos as $ag) {
            if (!$ag->data_agendamento) {
                continue;
            }

            $data = Carbon::parse($ag->data_agendamento);
            $mesChave = self::MESES[$data->month] . ' ' . $data->year;
            $dataKey = $data->format('Y-m-d');

            if (!isset($agenda[$mesChave])) {
                $agenda[$mesChave] = [
                    'total_agendamentos' => 0,
                    'dias' => [],
                ];
            }

            if (!isset($agenda[$mesChave]['dias'][$dataKey])) {
                $agenda[$mesChave]['dias'][$dataKey] = [
                    'data' => $dataKey,
                    'dia_semana' => self::DIAS_SEMANA[$data->dayOfWeek],
                    'dia' => $data->format('d'),
                    'agendamentos' => [],
                ];
            }

            $agenda[$mesChave]['dias'][$dataKey]['agendamentos'][] = [
                'horario'     => $ag->horario ? Carbon::parse($ag->horario)->format('H:i') : '--:--',
                'pet'         => $ag->pet->nome ?? 'Pet não informado',
                'especie'     => $ag->pet->especie ?? 'Não informado',
                'tutor'       => $ag->pet->cliente->nome ?? 'Tutor não informado',
                'servico'     => $ag->servico->nome ?? 'Serviço não informado',
                'funcionario' => $ag->funcionario->nome ?? 'Não atribuído',
                'status'      => $this->normalizarStatus($ag->status_agendamento),
                'observacao'  => $ag->observacao,
            ];

            $agenda[$mesChave]['total_agendamentos']++;
        }

        // Reindexa 'dias' de array associativo (por data) para lista sequencial,
        // já ordenada por data pois a query original usa orderBy('data_agendamento').
        foreach ($agenda as $mesChave => &$mesDados) {
            $mesDados['dias'] = array_values($mesDados['dias']);
        }
        unset($mesDados);

        return $agenda;
    }

    /**
     * Normaliza o texto de status_agendamento (minúsculo, sem acento) e
     * mapeia para as chaves usadas pelos badges do Blade.
     */
    private function normalizarStatus(?string $status): string
    {
        if (!$status) {
            return 'agendado';
        }

        $normalizado = strtolower(trim($status));
        $normalizado = str_replace(
            ['á', 'ã', 'â', 'é', 'ê', 'í', 'ó', 'ô', 'õ', 'ú', 'ç'],
            ['a', 'a', 'a', 'e', 'e', 'i', 'o', 'o', 'o', 'u', 'c'],
            $normalizado
        );

        if (!isset(self::STATUS_MAP[$normalizado])) {
            Log::warning("Status de agendamento não mapeado: {$status}");
        }

        return self::STATUS_MAP[$normalizado] ?? 'agendado';
    }
}