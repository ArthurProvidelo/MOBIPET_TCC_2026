<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Funcionario extends Model
{
    use HasFactory;

    // Nome da tabela
    protected $table = 'Funcionario';

    // Chave primária
    protected $primaryKey = 'id_funcionario';

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

    // Desativar timestamps (caso não tenha no banco)
    public $timestamps = false;

    public function agendamentos()
    {
        return $this->hasMany(
            Agendamento::class,
            'fk_id_funcionario',
            'id_funcionario'
        );
    }
}