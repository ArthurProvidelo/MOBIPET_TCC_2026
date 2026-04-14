<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Servico extends Model
{
    use HasFactory;

    // Nome da tabela
    protected $table = 'servico';

    // Chave primária
    protected $primaryKey = 'id_servico';

    // Permitir inserção em massa
    protected $fillable = [
        'nome',
        'descricao',
        'preco'
    ];

    // Sem timestamps
    public $timestamps = false;
}