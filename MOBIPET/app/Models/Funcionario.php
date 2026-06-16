<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Funcionario extends Model
{
    use HasFactory;

    // Nome da tabela no banco de dados
    protected $table = 'Funcionario';

    // Chave primária 
    protected $primaryKey = 'id_funcionario';

    // Ative como TRUE, pois sua tabela possui os campos created_at e updated_at
    public $timestamps = true;

    // Campos permitidos para inserção em massa
    protected $fillable = [
        'nome',
        'cpf',
        'telefone',
        'email',
        'senha',
        'cargo',
        'salario',
        'endereco'
    ];

    // Oculta a senha por padrão em retornos de consultas/JSON para maior segurança
    // protected $hidden = [
    //     'senha',
    // ];

    // Garante que a senha seja criptografada automaticamente (Laravel 10+)
    // protected $casts = [
    //     'senha' => 'hashed',
    // ];

    // Relacionamento com Agendamentos
    public function agendamentos()
    {
        return $this->hasMany(
            Agendamento::class,
            'fk_id_funcionario',
            'id_funcionario'
        );
    }
}