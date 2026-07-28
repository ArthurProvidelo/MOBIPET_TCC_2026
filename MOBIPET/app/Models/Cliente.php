<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;

    // Nome da tabela
    protected $table = 'Cliente';

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

    // Oculta a senha por padrão em retornos de consultas/JSON para maior segurança
    protected $hidden = [
        'senha',
    ];

    public function pets()
    {
        return $this->hasMany(Pet::class, 'fk_id_cliente', 'id_cliente');
    }
}