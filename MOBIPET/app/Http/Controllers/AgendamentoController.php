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
        $clienteId = Session::get('cliente_id');
        $pets = Pet::where('fk_id_cliente', $clienteId)->get();

        return view('agendamentos.create', compact('pets'));
    }

   public function store(Request $request)
{
    $request->validate([
        'nome_tutor' => 'required|string|max:255',
        'email' => 'required|email|max:255',
        'telefone' => 'required|string|max:20',
        'endereco' => 'nullable|string|max:255',

        'nome_pet' => 'required|string|max:255',
        'tipo_pet' => 'required|string|max:100',
        'raca' => 'nullable|string|max:255',
        'idade' => 'nullable|numeric',
        'porte' => 'nullable|string|max:100',

        'profissional' => 'required|string|max:255',
        'servico' => 'required|string|max:255',

        'data' => 'required|date',
        'hora' => 'required',
    ]);
    Agendamento::create([
        'data_agendamento' => $request->data,
        'horario' => $request->hora,
        'status_agendamento' => 'Pendente',
        'fk_id_pet' => 1,
        'fk_id_servico' => 1,
        'fk_id_funcionario' => 1,
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