<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class CadastroController extends Controller
{
    /**
     * Exibe a página com o formulário de cadastro de serviços.
     */
    public function create()
    {
        return view('services.create'); // Altere para o caminho correto da sua view
    }

    /**
     * Valida os dados enviados e salva o novo serviço no banco de dados.
     */
    public function store(Request $request)
    {
        // 1. Validação dos dados com base nos campos obrigatórios (*) do HTML
        $dadosValidados = $request->validate([
            'nome'          => 'required|string|max:255',
            'categoria'     => 'required|string|in:banho,tosa,consulta,outros',
            'preco'         => 'required|numeric|min:0',
            'duracao'       => 'required|integer|in:30,60,90,120',
            'monitoramento' => 'required|boolean',
            'descricao'     => 'nullable|string|max:1000',
        ], [
            // Mensagens de erro personalizadas (opcional)
            'nome.required'      => 'O campo Nome do Serviço é obrigatório.',
            'categoria.required' => 'Selecione uma categoria válida.',
            'preco.required'     => 'O preço do serviço deve ser preenchido.',
            'duracao.required'   => 'Selecione um tempo de duração estimado.',
        ]);

        // 2. Salva as informações validadas utilizando a Model
        Service::create($dadosValidados);

        // 3. Redireciona o usuário de volta para a listagem com uma mensagem de sucesso
        return redirect()->route('services')
                         ->with('sucesso', 'Serviço cadastrado com sucesso!');
    }
}