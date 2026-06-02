<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
     public function index()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'senha' => 'required'
        ]);

        $cliente = Cliente::where('email', $request->email)
            ->first();

        if (!$cliente) {
            return back()
                ->with('erro', 'Usuário não encontrado.');
        }

        if ($request->senha != $cliente->senha) {
            return back()
                ->with('erro', 'Senha inválida.');
        }

        Session::put('cliente_id', $cliente->id_cliente);
        Session::put('cliente_nome', $cliente->nome);

        return redirect()->route('index');
    }

    public function logout()
    {
        Session::flush();

        return redirect()->route('login');
    }
}
