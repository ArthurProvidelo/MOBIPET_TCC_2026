<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class ClienteController extends Controller
{
    // Listar clientes
    public function index()
    {
        $clientes = DB::table('clientes')->get();
        return view('clientes.index', compact('clientes'));
    }

    // Formulário de criação
    public function create()
    {
        return view('clientes.create');
    }

    // Salvar novo cliente
    public function store(Request $request)
    {
        $request->validate([
            'nome' => 'required|string|max:255',
            'cpf' => 'required|string|max:11',
            'telefone' => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:clientes,email',
            'senha' => 'required|string|max:255',
            'endereco' => 'required|string|max:255',
        ]);

        DB::table('clientes')->insert([
            'nome' => $request->nome,
            'cpf' => $request->cpf,
            'telefone' => $request->telefone,
            'email' => $request->email,
            'senha' => Hash::make($request->senha), // criptografia da senha
            'endereco' => $request->endereco,
        ]);

        return redirect()->route('clientes.index')
                         ->with('success', 'Cliente cadastrado com sucesso!');
    }

    // Visualizar cliente
    public function show($id)
    {
        $cliente = DB::table('clientes')
            ->where('id', $id)
            ->first();

        return view('clientes.show', compact('cliente'));
    }

    // Formulário de edição
    public function edit($id)
    {
        $cliente = DB::table('clientes')
            ->where('id', $id)
            ->first();

        return view('clientes.edit', compact('cliente'));
    }

    // Atualizar cliente
    public function update(Request $request, $id)
    {
        $request->validate([
            'nome' => 'required|string|max:255',
            'cpf' => 'required|string|max:11',
            'telefone' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'endereco' => 'required|string|max:255',
        ]);

        $dados = [
            'nome' => $request->nome,
            'cpf' => $request->cpf,
            'telefone' => $request->telefone,
            'email' => $request->email,
            'endereco' => $request->endereco,
        ];

        DB::table('clientes')
            ->where('id', $id)
            ->update($dados);

        return redirect()->route('clientes.index')
                         ->with('success', 'Cliente atualizado com sucesso!');
    }

    // Excluir cliente
    public function destroy($id)
    {
        DB::table('clientes')
            ->where('id', $id)
            ->delete();

        return redirect()->route('clientes.index')
                         ->with('success', 'Cliente excluído com sucesso!');
    }
}