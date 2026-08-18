<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Agendamento;
use Illuminate\Http\Request;

class AgendamentoController extends Controller
{
    public function index(Request $request)
    {
        $petIds = $request->user()->pets()->pluck('id_pet');

        $agendamentos = Agendamento::whereIn('fk_id_pet', $petIds)
            ->with(['pet', 'servico', 'funcionario'])
            ->orderBy('data_agendamento')
            ->orderBy('horario')
            ->get();

        return response()->json($agendamentos);
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
}
