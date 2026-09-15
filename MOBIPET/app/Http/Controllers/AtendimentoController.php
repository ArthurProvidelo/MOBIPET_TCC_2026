<?php

namespace App\Http\Controllers;

use App\Models\Atendimento;
use App\Models\AtendimentoEtapa;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class AtendimentoController extends Controller
{
    /**
     * (AJAX) Backup manual da esteira de atendimento (RFID) usado pelo painel
     * do funcionário: quando o cartão RFID do pet não é lido, o funcionário
     * escolhe a etapa atual manualmente pelo select.
     */
    public function atualizarEtapa(Request $request, $id)
    {
        $dados = $request->validate([
            'etapa' => ['required', Rule::in(Atendimento::ETAPAS)],
        ]);

        $atendimento = Atendimento::findOrFail($id);

        $agora = Carbon::now();
        $ultimaEtapa = Atendimento::ETAPAS[count(Atendimento::ETAPAS) - 1];

        AtendimentoEtapa::create([
            'fk_id_atendimento' => $atendimento->id_atendimento,
            'etapa' => $dados['etapa'],
            'concluida_em' => $agora,
        ]);

        $atendimento->update([
            'etapa_atual' => $dados['etapa'],
            'finalizado_em' => $dados['etapa'] === $ultimaEtapa ? $agora : null,
        ]);

        return response()->json([
            'success' => true,
            'message' => 'Etapa do atendimento atualizada com sucesso!',
            'etapa_atual' => $atendimento->etapa_atual,
            'etapa_label' => Atendimento::ETAPAS_LABELS[$atendimento->etapa_atual] ?? $atendimento->etapa_atual,
        ]);
    }
}
