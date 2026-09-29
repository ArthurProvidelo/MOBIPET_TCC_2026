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
    ];

    // No JSON (API/app mobile) as etapas continuam saindo como lista de
    // chaves (ex.: ["banho", "tosa"]), agora vindas da tabela servico_etapas.
    protected $appends = ['etapas'];

    protected $hidden = ['servicoEtapas'];

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
     * Etapas "do meio" da esteira que este serviço percorre, na ordem em
     * que foram cadastradas (tabela servico_etapas).
     */
    public function servicoEtapas()
    {
        return $this->hasMany(
            ServicoEtapa::class,
            'fk_id_servico',
            'id_servico'
        )->orderBy('ordem');
    }

    /**
     * Chaves das etapas configuradas (ex.: ["banho", "tosa"]).
     */
    public function getEtapasAttribute(): array
    {
        return $this->servicoEtapas->pluck('etapa')->all();
    }

    /**
     * Esteira de atendimento (RFID) deste serviço: check_in, as etapas "do
     * meio" configuradas no cadastro (Atendimento::ETAPAS_CONFIGURAVEIS,
     * ex.: banho, tosa...) e, por fim, pronto_retirada + finalizado.
     *
     * Sem etapas configuradas (nenhuma linha em servico_etapas — serviço
     * sem etapas marcadas no formulário): usa a esteira completa
     * (Atendimento::ETAPAS), mantendo o comportamento anterior.
     */
    public function etapasAtendimento(): array
    {
        $configuradas = array_values(array_intersect(
            Atendimento::ETAPAS_CONFIGURAVEIS,
            $this->etapas
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