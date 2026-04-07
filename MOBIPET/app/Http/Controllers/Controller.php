<?php

namespace App\Http\Controllers;

abstract class Controller
{
    use App\Models\Agendamento; // AQUI ESTÁ A CONEXÃO

public function salvar(Request $request) {
    // Agora você pode usar todos os métodos do Laravel (Eloquent)
    Agendamento::create($request->all()); 
}

}
