<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;

    // Nome da tabela (opcional, Laravel já entende "clientes")
    protected $table = 'cliente';

    // Chave primária
    protected $primaryKey = 'id_cliente';

    // Permitir inserção em massa
    protected $fillable = [
        'nome',
        'cpf',
        'telefone',
        'email',
        'senha',
        'endereco'
    ];

    // Se não tiver created_at e updated_at
    public $timestamps = false;
}