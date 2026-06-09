<?php

namespace App\Models;

// IMPORTAÇÕES OBRIGATÓRIAS DO FRAMEWORK
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cadastro extends Model
{
    use HasFactory;

    protected $table = 'servico';

    protected $fillable = [
        'nome',
        'categoria',
        'preco',
        'duracao',
        'monitoramento',
        'descricao',
    ];

    protected $casts = [
        'monitoramento' => 'boolean',
        'preco' => 'decimal:2',
    ];
}