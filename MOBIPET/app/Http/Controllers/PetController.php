<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PetController extends Controller
{
    // Listar pets
    public function index()
    {
        $pets = DB::table('pets')->get();
        return view('pets.index', compact('pets'));
    }

    // Formulário de criação
    public function create()
    {
        $clientes = DB::table('clientes')->get();
        return view('pets.create', compact('clientes'));
    }

    // Salvar novo pet
    public function store(Request $request)
    {
        $request->validate([
            'nome' => 'required|string|max:255',
            'especie' => 'required|string|max:255',
            'raca' => 'required|string|max:255',
            'porte' => 'required|string|max:255',
            'data_nascimento' => 'required|date',
            'fk_id_cliente' => 'required|integer',
        ]);

        DB::table('pets')->insert([
            'nome' => $request->nome,
            'especie' => $request->especie,
            'raca' => $request->raca,
            'porte' => $request->porte,
            'data_nascimento' => $request->data_nascimento,
            'fk_id_cliente' => $request->fk_id_cliente,
        ]);

        return redirect()->route('pets.index')
                         ->with('success', 'Pet cadastrado com sucesso!');
    }

    // Visualizar pet
    public function show($id)
    {
        $pet = DB::table('pets')
            ->where('id', $id)
            ->first();

        return view('pets.show', compact('pet'));
    }

    // Formulário de edição
    public function edit($id)
    {
        $pet = DB::table('pets')
            ->where('id', $id)
            ->first();

        $clientes = DB::table('clientes')->get();

        return view('pets.edit', compact('pet', 'clientes'));
    }

    // Atualizar pet
    public function update(Request $request, $id)
    {
        $request->validate([
            'nome' => 'required|string|max:255',
            'especie' => 'required|string|max:255',
            'raca' => 'required|string|max:255',
            'porte' => 'required|string|max:255',
            'data_nascimento' => 'required|date',
            'fk_id_cliente' => 'required|integer',
        ]);

        DB::table('pets')
            ->where('id', $id)
            ->update([
                'nome' => $request->nome,
                'especie' => $request->especie,
                'raca' => $request->raca,
                'porte' => $request->porte,
                'data_nascimento' => $request->data_nascimento,
                'fk_id_cliente' => $request->fk_id_cliente,
            ]);

        return redirect()->route('pets.index')
                         ->with('success', 'Pet atualizado com sucesso!');
    }

    // Excluir pet
    public function destroy($id)
    {
        DB::table('pets')
            ->where('id', $id)
            ->delete();

        return redirect()->route('pets.index')
                         ->with('success', 'Pet excluído com sucesso!');
    }
}