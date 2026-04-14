<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FuncionarioController extends Controller
{
    // Listar funcionários
    public function index()
    {
        $funcionarios = DB::table('funcionarios')->get();
        return view('funcionarios.index', compact('funcionarios'));
    }

    public function create()
    {
        return view('funcionarios.create');
    }

    // Salvar novo funcionário
    public function store(Request $request)
    {
        $request->validate([
            'nome' => 'required|string|max:255',
            'cargo' => 'required|string|max:255',
            'telefone' => 'required|string|max:255',
            'email' => 'required|email|max:255',
        ]);

        DB::table('funcionarios')->insert([
            'nome' => $request->nome,
            'cargo' => $request->cargo,
            'telefone' => $request->telefone,
            'email' => $request->email,
        ]);

        return redirect()->route('funcionarios.index')
                         ->with('success', 'Funcionário cadastrado com sucesso!');
    }

    // Visualizar funcionário
    public function show($id)
    {
        $funcionario = DB::table('funcionarios')
            ->where('id', $id)
            ->first();

        return view('funcionarios.show', compact('funcionario'));
    }

    // Formulário de edição
    public function edit($id)
    {
        $funcionario = DB::table('funcionarios')
            ->where('id', $id)
            ->first();

        return view('funcionarios.edit', compact('funcionario'));
    }

    // Atualizar funcionário
    public function update(Request $request, $id)
    {
        $request->validate([
            'nome' => 'required|string|max:255',
            'cargo' => 'required|string|max:255',
            'telefone' => 'required|string|max:255',
            'email' => 'required|email|max:255',
        ]);

        DB::table('funcionarios')
            ->where('id', $id)
            ->update([
                'nome' => $request->nome,
                'cargo' => $request->cargo,
                'telefone' => $request->telefone,
                'email' => $request->email,
            ]);

        return redirect()->route('funcionarios.index')
                         ->with('success', 'Funcionário atualizado com sucesso!');
    }

    // Excluir funcionário
    public function destroy($id)
    {
        DB::table('funcionarios')
            ->where('id', $id)
            ->delete();

        return redirect()->route('funcionarios.index')
                         ->with('success', 'Funcionário excluído com sucesso!');
    }
}