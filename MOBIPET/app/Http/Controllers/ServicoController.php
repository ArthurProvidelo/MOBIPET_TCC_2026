<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ServicoController extends Controller
{
    // Listar serviços
    public function index()
    {
        $servicos = DB::table('servico')->get();
        return view('servicos.index', compact('servicos'));
    }

    // Formulário de criação
    public function create()
    {
        return view('servicos.create');
    }

    // Salvar novo serviço
    public function store(Request $request)
    {
        $request->validate([
            'nome' => 'required|string|max:255',
            'descricao' => 'nullable|string',
            'preco' => 'required|numeric',
        ]);

        DB::table('servico')->insert([
            'nome' => $request->nome,
            'descricao' => $request->descricao,
            'preco' => $request->preco,
        ]);

        return redirect()->route('servicos.index')
                         ->with('success', 'Serviço cadastrado com sucesso!');
    }

    // Visualizar serviço
    public function show($id)
    {
        $servico = DB::table('servico')
            ->where('id_servico', $id)
            ->first();

        return view('servicos.show', compact('servico'));
    }

    // Formulário de edição
    public function edit($id)
    {
        $servico = DB::table('servico')
            ->where('id_servico', $id)
            ->first();

        return view('servicos.edit', compact('servico'));
    }

    // Atualizar serviço
    public function update(Request $request, $id)
    {
        $request->validate([
            'nome' => 'required|string|max:255',
            'descricao' => 'nullable|string',
            'preco' => 'required|numeric',
        ]);

        DB::table('servico')
            ->where('id_servico', $id)
            ->update([
                'nome' => $request->nome,
                'descricao' => $request->descricao,
                'preco' => $request->preco,
            ]);

        return redirect()->route('servicos.index')
                         ->with('success', 'Serviço atualizado com sucesso!');
    }

    // Excluir serviço
    public function destroy($id)
    {
        DB::table('servico')
            ->where('id_servico', $id)
            ->delete();

        return redirect()->route('servicos.index')
                         ->with('success', 'Serviço excluído com sucesso!');
    }
}