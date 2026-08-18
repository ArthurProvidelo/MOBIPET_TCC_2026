<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Atendimento extends Model
{
    protected $table = 'atendimentos';

    protected $primaryKey = 'id_atendimento';

    public $timestamps = false;

    protected $fillable = [
        'fk_id_pet',
        'fk_id_servico',
        'fk_id_agendamento',
        'etapa_atual',
        'iniciado_em',
        'finalizado_em',
    ];

    protected $casts = [
        'iniciado_em' => 'datetime',
        'finalizado_em' => 'datetime',
    ];

    /**
     * Ordem fixa das etapas da esteira de atendimento, espelhando o enum
     * EtapaAtendimento do app Flutter.
     */
    public const ETAPAS = [
        'check_in',
        'banho',
        'secagem',
        'tosa',
        'escovacao',
        'perfume',
        'pronto_retirada',
        'finalizado',
    ];

    public function pet()
    {
        return $this->belongsTo(Pet::class, 'fk_id_pet', 'id_pet');
    }

    public function servico()
    {
        return $this->belongsTo(Servico::class, 'fk_id_servico', 'id_servico');
    }

    public function agendamento()
    {
        return $this->belongsTo(Agendamento::class, 'fk_id_agendamento', 'id_agendamento');
    }

    public function etapas()
    {
        return $this->hasMany(AtendimentoEtapa::class, 'fk_id_atendimento', 'id_atendimento')
            ->orderBy('concluida_em');
    }

    public function etapaIndex(): int
    {
        return array_search($this->etapa_atual, self::ETAPAS, true);
    }

    public function proximaEtapa(): ?string
    {
        $proximoIndice = $this->etapaIndex() + 1;

        return self::ETAPAS[$proximoIndice] ?? null;
    }
}
