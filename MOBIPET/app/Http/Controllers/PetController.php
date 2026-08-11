<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PetController extends Controller
{
    // Listar pets
    public function index()
    {
        if (!session()->has('id') || session('nivel_acesso') != 'USUARIO') {
            return redirect()->route('login');
        }

        $pets = DB::table('pet')
            ->leftJoin('Agendamento', 'pet.id_pet', '=', 'Agendamento.fk_id_pet')
            ->where('pet.fk_id_cliente', session('id'))
            ->select(
                'pet.*',
                'Agendamento.status_agendamento as status_agendamento'
            )
            ->get();

        return view('pets.index', compact('pets'));
    }

    // Formulário de criação
    public function create()
    {
        if (!session()->has('id') || session('nivel_acesso') != 'USUARIO') {
            return redirect()->route('login');
        }

        return view('pets.create');
    }

    // Salvar novo pet
    public function store(Request $request)
    {
        if (!session()->has('id') || session('nivel_acesso') != 'USUARIO') {
            return redirect()->route('login');
        }

        $request->validate([
            'nome' => 'required',
            'especie' => 'required',
            'raca' => 'required',
            'porte' => 'required',
            'data_nascimento' => 'required|date',
        ]);

        DB::table('pet')->insert([
            'nome' => $request->nome,
            'especie' => $request->especie,
            'raca' => $request->raca,
            'porte' => $request->porte,
            'data_nascimento' => $request->data_nascimento,

            // Status inicial
            'status' => 'Aguardando atendimento',

            'fk_id_cliente' => session('id'),
        ]);

        return redirect()
            ->route('pets.index')
            ->with('success', 'Pet cadastrado com sucesso!');
    }

    // Visualizar pet
    public function show(int $id)
    {
        if (!session()->has('id') || session('nivel_acesso') != 'USUARIO') {
            return redirect()->route('login');
        }

        $pet = DB::table('pet')
            ->where('id_pet', $id)
            ->where('fk_id_cliente', session('id'))
            ->first();

        if (!$pet) {
            abort(403);
        }

        return view('pets.show', compact('pet'));
    }

    // Formulário de edição
    public function edit(int $id)
    {
        if (!session()->has('id') || session('nivel_acesso') != 'USUARIO') {
            return redirect()->route('login');
        }

        $pet = DB::table('pet')
            ->where('id_pet', $id)
            ->where('fk_id_cliente', session('id'))
            ->first();

        if (!$pet) {
            abort(403);
        }

        return view('pets.edit', compact('pet'));
    }

    // Atualizar pet
    public function update(Request $request, int $id)
    {
        if (!session()->has('id') || session('nivel_acesso') != 'USUARIO') {
            return redirect()->route('login');
        }

        $request->validate([
            'nome' => 'required',
            'especie' => 'required',
            'raca' => 'required',
            'porte' => 'required',
            'data_nascimento' => 'nullable|date',
        ]);

        DB::table('pet')
            ->where('id_pet', $id)
            ->where('fk_id_cliente', session('id'))
            ->update([
                'nome' => $request->nome,
                'especie' => $request->especie,
                'raca' => $request->raca,
                'porte' => $request->porte,
                'data_nascimento' => $request->data_nascimento ?: null,

                // O status não é alterado ao editar os dados
            ]);

        return redirect()
            ->route('pets.index')
            ->with('success', 'Pet atualizado com sucesso!');
    }

    // Excluir pet
    public function destroy(int $id)
    {
        if (!session()->has('id') || session('nivel_acesso') != 'USUARIO') {
            return redirect()->route('login');
        }

        DB::table('pet')
            ->where('id_pet', $id)
            ->where('fk_id_cliente', session('id'))
            ->delete();

        return redirect()
            ->route('pets.index')
            ->with('success', 'Pet excluído com sucesso!');
    }
}