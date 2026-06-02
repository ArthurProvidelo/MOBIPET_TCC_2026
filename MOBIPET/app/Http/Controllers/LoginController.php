<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    // Exibe a tela de cadastro
    public function exibirCadastro() 
    {
        return view('auth.cadastro');
    }

    // Processa a gravação no banco de dados adequado ao script SQL
    public function salvarCadastro(Request $request) 
    {
        // 1. Validação dos dados com base no banco de dados
        $request->validate([
            'nome'     => 'required|string|max:255',
            'cpf'      => 'required|string|max:11',
            'telefone' => 'required|string|max:255',
            'email'    => 'required|email|max:255',
            'senha'    => 'required|min:6|max:255',
            'endereco' => 'required|string|max:255',
        ]);

        // 2. Gravação na tabela correta do seu banco: 'Cliente'
        DB::table('Cliente')->insert([
            'nome'     => $request->nome,
            'cpf'      => $request->cpf,
            'telefone' => $request->telefone,
            'email'    => $request->email,
            'senha'    => Hash::make($request->senha), // Senha criptografada por segurança
            'endereco' => $request->endereco,
        ]);

        // 3. Redirecionamento para a tela de login com mensagem de sucesso
        return redirect()->route('login')->with('sucesso', 'Cadastro realizado com sucesso! Faça seu login.');
    }
}