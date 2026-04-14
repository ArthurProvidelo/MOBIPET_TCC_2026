<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pet extends Model
{
    use HasFactory;

    // Nome da tabela
    protected $table = 'pet';

    // Chave primária
    protected $primaryKey = 'id_pet';

    // Campos permitidos para inserção em massa
    protected $fillable = [
        'nome',
        'especie',
        'raca',
        'idade',
        'peso',
        'id_cliente'
    ];

    // Desativar timestamps (caso não tenha no banco)
    public $timestamps = false;
}