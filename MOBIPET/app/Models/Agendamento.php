<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Agendamento extends Model
{
    use HasFactory; //permite fazer testes de forma automatizada

    // aqui vai ser definido o que sera enviado para ser preenchido 
    protected $fillable = [
        'nome_pet',
        'raca',
        'tipo_servico', // ex: banho, tosa, hidratação
        'data_agendamento',
        'horario',
        'observacoes'
    ];
}
