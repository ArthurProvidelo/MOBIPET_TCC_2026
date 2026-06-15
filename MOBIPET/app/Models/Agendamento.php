<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Agendamento extends Model
{
    use HasFactory;

    // Nome da tabela
    protected $table = 'Agendamento';

    // Chave primária
    protected $primaryKey = 'id_agendamento';

    // Permitir inserção em massa
    protected $fillable = [
        'data_agendamento',
        'horario',
        'status_agendamento',
        'observacoes',
        'fk_id_pet',
        'fk_id_servico',
        'fk_id_funcionario'
    ];

    // Se não tiver created_at e updated_at
    public $timestamps = false;

    public function pet()
    {
        return $this->belongsTo(Pet::class, 'fk_id_pet', 'id_pet');
    }

    public function servico()
    {
        return $this->belongsTo(Servico::class, 'fk_id_servico', 'id_servico');
    }

    public function funcionario()
    {
        return $this->belongsTo(Funcionario::class, 'fk_id_funcionario', 'id_funcionario');
    }
}