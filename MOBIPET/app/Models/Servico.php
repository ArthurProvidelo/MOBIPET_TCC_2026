<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Servico extends Model
{
    use HasFactory;

    // Nome da tabela
    protected $table = 'Servico';

    // Chave primária
    protected $primaryKey = 'id_servico';

    // Permitir inserção em massa
    protected $fillable = [
        'nome',
        'categoria',
        'descricao',
        'preco',
        'duracao_estimada',
        'etapas',
    ];

    protected $casts = [
        'etapas' => 'array',
    ];

    // Sem timestamps
    public $timestamps = false;

    public function agendamentos()
    {
        return $this->hasMany(
            Agendamento::class,
            'fk_id_servico',
            'id_servico'
        );
    }

    /**
     * Esteira de atendimento (RFID) deste serviço: check_in, as etapas "do
     * meio" configuradas no cadastro (Atendimento::ETAPAS_CONFIGURAVEIS,
     * ex.: banho, tosa...) e, por fim, pronto_retirada + finalizado.
     *
     * Sem etapas configuradas (coluna vazia/nula — serviço cadastrado antes
     * dela existir, ou nenhuma marcada no formulário): usa a esteira
     * completa (Atendimento::ETAPAS), mantendo o comportamento anterior.
     */
    public function etapasAtendimento(): array
    {
        $configuradas = array_values(array_intersect(
            Atendimento::ETAPAS_CONFIGURAVEIS,
            $this->etapas ?? []
        ));

        if (empty($configuradas)) {
            return Atendimento::ETAPAS;
        }

        return [
            Atendimento::ETAPAS[0], // check_in
            ...$configuradas,
            'pronto_retirada',
            'finalizado',
        ];
    }
}