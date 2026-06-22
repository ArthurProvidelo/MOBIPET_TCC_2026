<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use App\Models\Funcionario;
use Exception;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Laravel\Socialite\Socialite;

class GoogleFuncionarioController extends Controller
{
    public function redirect(){
        return Socialite::driver('google')->redirect();
    }

    // Criar função para fazer login
    public function callbackFuncionario(){
        // Tratamento de erros
        try{
            // Pegar os dados enviados pelo google
            $usuarioGoogle = Socialite::driver('google')->user();

            // Fazer adaptação para o contexto do banco
            // Procurar um usuário pelo email
            $user = Funcionario::where(
                'email',
                $usuarioGoogle->getEmail()
            )->first();

            // Se não existir usuario, criar usuario
            if(!$user){
                $user = Funcionario::create([
                    'nome' => $usuarioGoogle->getName(),
                    'email' => $usuarioGoogle->getEmail(),
                    'senha' => Hash::make('1234')
                ]);
            }

            // Faço o login no sistema
            // Auth::login($user);
            Session::put('id', $user->id_cliente);
            Session::put('nome', $user->nome);
            Session::put('nivel_acesso', 'FUNCIONARIO');

            // redireciona para a tela
            return redirect('/');

        } catch(Exception $e){

        }
    }
}