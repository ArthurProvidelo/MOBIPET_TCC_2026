<?php

namespace App\Http\Controllers;

use App\Models\Atendimento;
use App\Models\AtendimentoEtapa;
use App\Models\Pet;
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
        $atendimento = Atendimento::findOrFail($id);
        $fluxo = $atendimento->etapasFluxo();

        $dados = $request->validate([
            'etapa' => ['required', Rule::in($fluxo)],
        ]);

        $agora = Carbon::now();
        $ultimaEtapa = $fluxo[count($fluxo) - 1];

        AtendimentoEtapa::create([
            'fk_id_atendimento' => $atendimento->id_atendimento,
            'etapa' => $dados['etapa'],
            'concluida_em' => $agora,
        ]);

        $atendimento->update([
            'etapa_atual' => $dados['etapa'],
            'finalizado_em' => $dados['etapa'] === $ultimaEtapa ? $agora : null,
        ]);

        // A leitura do RFID (real ou simulada) reflete a etapa atual no
        // status do pet, para telas que mostram apenas o Pet (sem o
        // atendimento) saberem em que ponto ele está.
        $statusPet = $dados['etapa'] === $ultimaEtapa
            ? 'Finalizado'
            : Atendimento::ETAPAS_LABELS[$dados['etapa']];

        Pet::where('id_pet', $atendimento->fk_id_pet)->update(['status' => $statusPet]);

        return response()->json([
            'success' => true,
            'message' => 'Etapa do atendimento atualizada com sucesso!',
            'etapa_atual' => $atendimento->etapa_atual,
            'etapa_label' => Atendimento::ETAPAS_LABELS[$atendimento->etapa_atual] ?? $atendimento->etapa_atual,
            'status_pet' => $statusPet,
        ]);
    }
}
