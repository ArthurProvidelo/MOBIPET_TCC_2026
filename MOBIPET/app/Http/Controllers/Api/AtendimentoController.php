<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Atendimento;
use App\Models\AtendimentoEtapa;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class AtendimentoController extends Controller
{
    /**
     * Atendimento em andamento mais recente entre todos os pets do cliente
     * autenticado (o que a Home do app mostra).
     */
    public function atual(Request $request)
    {
        $petIds = $request->user()->pets()->pluck('id_pet');

        $atendimento = Atendimento::whereIn('fk_id_pet', $petIds)
            ->whereNull('finalizado_em')
            ->with(['etapas', 'servico', 'pet'])
            ->latest('iniciado_em')
            ->first();

        return response()->json(['atendimento' => $atendimento]);
    }

    /**
     * Inicia um novo atendimento (equivalente ao check-in). No futuro isso
     * deve ser disparado pelo leitor RFID/ESP32 na recepção; por ora o app
     * mobile aciona diretamente, para fins de demonstração.
     */
    public function store(Request $request)
    {
        $dados = $request->validate([
            'fk_id_pet' => 'required|exists:Pet,id_pet',
            'fk_id_servico' => 'required|exists:Servico,id_servico',
            'fk_id_agendamento' => 'nullable|exists:Agendamento,id_agendamento',
        ]);

        $petValido = $request->user()->pets()->where('id_pet', $dados['fk_id_pet'])->exists();
        abort_if(!$petValido, 403, 'Este pet não pertence à sua conta.');

        $emAndamento = Atendimento::where('fk_id_pet', $dados['fk_id_pet'])->whereNull('finalizado_em')->exists();
        abort_if($emAndamento, 422, 'Este pet já possui um atendimento em andamento.');

        $agora = Carbon::now();
        $primeiraEtapa = Atendimento::ETAPAS[0];

        $atendimento = Atendimento::create([
            ...$dados,
            'etapa_atual' => $primeiraEtapa,
            'iniciado_em' => $agora,
        ]);

        AtendimentoEtapa::create([
            'fk_id_atendimento' => $atendimento->id_atendimento,
            'etapa' => $primeiraEtapa,
            'concluida_em' => $agora,
        ]);

        return response()->json($atendimento->fresh(['etapas', 'servico', 'pet']), 201);
    }

    /**
     * Simula a leitura do cartão RFID no leitor conectado ao ESP32,
     * avançando o pet para a próxima etapa da esteira de atendimento.
     */
    public function avancar(Request $request, int $id)
    {
        $petIds = $request->user()->pets()->pluck('id_pet');

        $atendimento = Atendimento::whereIn('fk_id_pet', $petIds)->where('id_atendimento', $id)->first();
        abort_if(!$atendimento, 404, 'Atendimento não encontrado.');
        abort_if($atendimento->finalizado_em, 422, 'Este atendimento já foi finalizado.');

        $proximaEtapa = $atendimento->proximaEtapa();
        abort_if(!$proximaEtapa, 422, 'Não há próxima etapa.');

        $agora = Carbon::now();

        AtendimentoEtapa::create([
            'fk_id_atendimento' => $atendimento->id_atendimento,
            'etapa' => $proximaEtapa,
            'concluida_em' => $agora,
        ]);

        $atendimento->update([
            'etapa_atual' => $proximaEtapa,
            'finalizado_em' => $proximaEtapa === Atendimento::ETAPAS[count(Atendimento::ETAPAS) - 1] ? $agora : null,
        ]);

        return response()->json($atendimento->fresh(['etapas', 'servico', 'pet']));
    }
}
