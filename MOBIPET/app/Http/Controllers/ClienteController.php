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
    public function store(Request $request){
        // Remove máscara antes da validação
        $request->merge([
            'cpf' => preg_replace('/\D/', '', $request->cpf),
            'telefone' => preg_replace('/\D/', '', $request->telefone),
        ]);

        $request->validate([
            'nome' => 'required|string|max:255',
            'cpf' => 'required|digits:11',
            'telefone' => 'required|string|max:11',
            'email' => 'required|email|max:255|unique:clientes,email',
            'senha' => 'required|string|min:6|max:255',
            'endereco' => 'required|string|max:255',
        ]);

        DB::table('clientes')->insert([
            'nome' => $request->nome,
            'cpf' => $request->cpf,
            'telefone' => $request->telefone,
            'email' => $request->email,
            'senha' => Hash::make($request->senha),
            'endereco' => $request->endereco,
        ]);

        return redirect()->route('clientes.index')
            ->with('success', 'Cliente cadastrado com sucesso!');
    }

    public function perfil(){
        if (!session()->has('cliente_id')) {
            return redirect()->route('login');
        }

        $cliente = DB::table('cliente')
            ->where('id_cliente', session('cliente_id'))
            ->first();

        $pets = DB::table('pet')
            ->where('fk_id_cliente', session('cliente_id'))
            ->get();

        return view('perfil', compact(
            'cliente',
            'pets'
        ));
    }

    // Visualizar cliente
    public function show($id)
    {
        $cliente = DB::table('cliente')
            ->where('id_cliente', $id)
            ->first();

        return view('clientes.show', compact('cliente'));
    }

    // Formulário de edição
    public function edit($id)
    {
        $cliente = DB::table('clientes')
            ->where('id_cliente', $id)
            ->first();

        return view('clientes.edit', compact('cliente'));
    }

    // Atualizar cliente
    public function update(Request $request, $id){
        $request->merge([
            'cpf' => preg_replace('/\D/', '', $request->cpf),
            'telefone' => preg_replace('/\D/', '', $request->telefone),
        ]);

        $request->validate([
            'nome' => 'required|string|max:255',
            'cpf' => 'required|digits:11',
            'telefone' => 'required|string|max:11',
            'email' => 'required|email|max:255',
            'endereco' => 'required|string|max:255',
        ]);

        DB::table('clientes')
            ->where('id_cliente', $id)
            ->update([
                'nome' => $request->nome,
                'cpf' => $request->cpf,
                'telefone' => $request->telefone,
                'email' => $request->email,
                'endereco' => $request->endereco,
            ]);

        return redirect()->route('clientes.index')
            ->with('success', 'Cliente atualizado com sucesso!');
    }

    public function updatePerfil(Request $request){
    if (!session()->has('cliente_id')) {
        return redirect()->route('login');
    }

    $request->validate([
        'nome' => 'required|max:255',
        'email' => 'required|email|max:255',
        'telefone' => 'required|max:255',
        'endereco' => 'required|max:255'
    ]);

    DB::table('cliente')
        ->where('id_cliente', session('cliente_id'))
        ->update([
            'nome' => $request->nome,
            'email' => $request->email,
            'telefone' => $request->telefone,
            'endereco' => $request->endereco
        ]);

    return redirect()
        ->route('perfil')
        ->with('success', 'Perfil atualizado com sucesso!');
}

    // Excluir cliente
    public function destroy($id)
    {
        DB::table('clientes')
            ->where('id_cliente', $id)
            ->delete();

        return redirect()->route('clientes.index')
                         ->with('success', 'Cliente excluído com sucesso!');
    }
}