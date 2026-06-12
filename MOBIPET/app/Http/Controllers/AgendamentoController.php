<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Agendamento;
use App\Models\Pet;
use App\Models\Servico;
use App\Models\Funcionario;
use Illuminate\Support\Facades\Session;

class AgendamentoController extends Controller
{
    public function index()
    {
        $agendamentos = Agendamento::all();
        return view('agendamentos.index', compact('agendamentos'));
    }

    public function create()
    {
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
        ]);

        Agendamento::create([
            'data_agendamento' => $request->data_agendamento,
            'horario' => $request->horario,
            'status_agendamento' => 'Pendente',

            'fk_id_pet' => $request->fk_id_pet,
            'fk_id_servico' => $request->fk_id_servico,
            'fk_id_funcionario' => $request->fk_id_funcionario,
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
}
