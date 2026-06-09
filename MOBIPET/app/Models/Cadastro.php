<?php

namespace App\Models;

// IMPORTAÇÕES OBRIGATÓRIAS DO FRAMEWORK
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    protected $table = 'services';

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