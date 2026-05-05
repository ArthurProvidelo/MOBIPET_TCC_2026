<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Agendamento;

class AgendamentoController extends Controller
{
    // Listar todos
    public function index()
    {
        $agendamentos = Agendamento::all();
        return view('agendamentos.index', compact('agendamentos'));
    }

    // Formulário de criação
    public function create()
    {
        return view('agendamentos.create');
    }

    // Salvar
    public function store(Request $request)
    {
        $request->validate([
            'nome_pet' => 'required|string|max:255',
            'raca' => 'required|string|max:255',
            'tipo_servico' => 'required|string|max:255',
            'data_agendamento' => 'required|date',
            'horario' => 'required',
            'observacoes' => 'nullable|string',
        ]);

        Agendamento::create($request->all());

        return redirect()->route('agendamentos.index')
            ->with('success', 'Agendamento criado com sucesso!');
    }

    // Mostrar um
    public function show($id)
    {
        $agendamento = Agendamento::findOrFail($id);
        return view('agendamentos.show', compact('agendamento'));
    }

    // Editar
    public function edit($id)
    {
        $agendamento = Agendamento::findOrFail($id);
        return view('agendamentos.edit', compact('agendamento'));
    }

    // Atualizar
    public function update(Request $request, $id)
    {
        $request->validate([
            'nome_pet' => 'required|string|max:255',
            'raca' => 'required|string|max:255',
            'tipo_servico' => 'required|string|max:255',
            'data_agendamento' => 'required|date',
            'horario' => 'required',
            'observacoes' => 'nullable|string',
        ]);

        $agendamento = Agendamento::findOrFail($id);
        $agendamento->update($request->all());

        return redirect()->route('agendamentos.index')
            ->with('success', 'Agendamento atualizado com sucesso!');
    }

    // Deletar
    public function destroy($id)
    {
        $agendamento = Agendamento::findOrFail($id);
        $agendamento->delete();

        return redirect()->route('agendamentos.index')
            ->with('success', 'Agendamento excluído com sucesso!');
    }
}