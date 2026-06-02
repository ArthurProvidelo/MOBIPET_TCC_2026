<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PetController extends Controller
{
    // Listar pets
    public function index()
    {
        if (!session()->has('cliente_id')) {
            return redirect()->route('login');
        }

        $pets = DB::table('pet')
            ->where('fk_id_cliente', session('cliente_id'))
            ->get();

        return view('pets.index', compact('pets'));
    }

    // Formulário de criação
    public function create()
    {
        if (!session()->has('cliente_id')) {
            return redirect()->route('login');
        }

        return view('pets.create');
    }

    // Salvar novo pet
    public function store(Request $request)
{
            if (!session()->has('cliente_id')) {
            return redirect()->route('login');
        }
    $request->validate([
        'nome' => 'required',
        'especie' => 'required',
        'raca' => 'required',
        'porte' => 'required',
        'data_nascimento' => 'required|date'
    ]);

    DB::table('pet')->insert([
        'nome' => $request->nome,
        'especie' => $request->especie,
        'raca' => $request->raca,
        'porte' => $request->porte,
        'data_nascimento' => $request->data_nascimento,
        'fk_id_cliente' => session('cliente_id')
    ]);

    return redirect()
        ->route('pets.index')
        ->with('success', 'Pet cadastrado com sucesso!');
}

    // Visualizar pet
    public function show(int $id)
{
    $pet = DB::table('pet')
        ->where('id_pet', $id)
        ->where('fk_id_cliente', session('cliente_id'))
        ->first();

    if (!$pet) {
        abort(403);
    }

    return view('pets.show', compact('pet'));
}

    // Formulário de edição
    public function edit(int $id)
{
    $pet = DB::table('pet')
        ->where('id_pet', $id)
        ->where('fk_id_cliente', session('cliente_id'))
        ->first();

    if (!$pet) {
        abort(403);
    }

    return view('pets.edit', compact('pet'));
}

    // Atualizar pet
    public function update(Request $request, int $id)
{
    $request->validate([
        'nome' => 'required',
        'especie' => 'required',
        'raca' => 'required',
        'porte' => 'required',
        'data_nascimento' => 'required|date'
    ]);

    DB::table('pet')
        ->where('id_pet', $id)
        ->where('fk_id_cliente', session('cliente_id'))
        ->update([
            'nome' => $request->nome,
            'especie' => $request->especie,
            'raca' => $request->raca,
            'porte' => $request->porte,
            'data_nascimento' => $request->data_nascimento
        ]);

    return redirect()
        ->route('pets.index')
        ->with('success', 'Pet atualizado com sucesso!');
}

    // Excluir pet
    public function destroy(int $id)
{
    DB::table('pet')
        ->where('id_pet', $id)
        ->where('fk_id_cliente', session('cliente_id'))
        ->delete();

    return redirect()
        ->route('pets.index')
        ->with('success', 'Pet excluído com sucesso!');
}
}