<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AgendamentoController extends Controller
{
    // Listar todos os agendamentos
    public function index()
    {
        $agendamentos = DB::table('agendamentos')->get();
        return view('agendamentos.index', compact('agendamentos'));
    }

    public function create()
    {
        return view('agendamentos.create');
    }

    // Salvar novo agendamento
    public function store(Request $request)
    {
        $request->validate([
            'data_agendamento' => 'required|date',
            'horario' => 'required',
            'status_agendamento' => 'required|string|max:255',
        ]);

        DB::table('agendamentos')->insert([
            'data_agendamento' => $request->data_agendamento,
            'horario' => $request->horario,
            'status_agendamento' => $request->status_agendamento,
        ]);

        return redirect()->route('agendamentos.index')
                         ->with('success', 'Agendamento criado com sucesso!');
    }

    // Mostrar um agendamento específico
    public function show($id)
    {
        $agendamento = DB::table('agendamentos')
            ->where('id_agendamento', $id)
            ->first();

        return view('agendamentos.show', compact('agendamento'));
    }

    // Mostrar formulário de edição
    public function edit($id)
    {
        $agendamento = DB::table('agendamentos')
            ->where('id_agendamento', $id)
            ->first();

        return view('agendamentos.edit', compact('agendamento'));
    }

    // Atualizar agendamento
    public function update(Request $request, $id)
    {
        $request->validate([
            'data_agendamento' => 'required|date',
            'horario' => 'required',
            'status_agendamento' => 'required|string|max:255',
        ]);

        DB::table('agendamentos')
            ->where('id_agendamento', $id)
            ->update([
                'data_agendamento' => $request->data_agendamento,
                'horario' => $request->horario,
                'status_agendamento' => $request->status_agendamento,
            ]);

        return redirect()->route('agendamentos.index')
                         ->with('success', 'Agendamento atualizado com sucesso!');
    }

    // Deletar agendamento
    public function destroy($id)
    {
        DB::table('agendamentos')
            ->where('id_agendamento', $id)
            ->delete();

        return redirect()->route('agendamentos.index')
                         ->with('success', 'Agendamento excluído com sucesso!');
    }
}