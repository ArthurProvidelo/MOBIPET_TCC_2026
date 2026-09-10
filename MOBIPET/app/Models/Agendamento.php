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
        'id_agendamento',
        'data_agendamento',
        'horario',
        'status_agendamento',
        'observacao',
        'fk_id_pet',
        'fk_id_servico',
        'fk_id_funcionario'
    ];

    // Se não tiver created_at e updated_at
    public $timestamps = false;

    /**
     * Janela de atendimento da agenda: das 07:00 às 18:00, de 30 em 30 minutos.
     * Fonte única usada para montar o <select> do formulário e para validar
     * o horário recebido no servidor.
     *
     * @return array<int, string>  ex.: ['07:00', '07:30', ..., '18:00']
     */
    public static function horariosDisponiveis(): array
    {
        $slots = [];

        for ($minutos = 7 * 60; $minutos <= 18 * 60; $minutos += 30) {
            $slots[] = sprintf('%02d:%02d', intdiv($minutos, 60), $minutos % 60);
        }

        return $slots;
    }

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