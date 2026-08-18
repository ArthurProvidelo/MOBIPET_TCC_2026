<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Laravel\Sanctum\HasApiTokens;

class Cliente extends Authenticatable
{
    use HasFactory, HasApiTokens;

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

    // A coluna de senha do banco chama "senha" (não "password"), então o guard
    // de autenticação (Auth::attempt / Hash::check via Sanctum) precisa saber
    // buscar por aqui.
    public function getAuthPassword()
    {
        return $this->senha;
    }

    public function pets()
    {
        return $this->hasMany(Pet::class, 'fk_id_cliente', 'id_cliente');
    }
}
