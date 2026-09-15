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

    /**
     * Rótulos em português das etapas, usados no select de atualização
     * manual do painel do funcionário (backup para quando o RFID falha).
     */
    public const ETAPAS_LABELS = [
        'check_in' => 'Check-in',
        'banho' => 'Banho',
        'secagem' => 'Secagem',
        'tosa' => 'Tosa',
        'escovacao' => 'Escovação',
        'perfume' => 'Perfume',
        'pronto_retirada' => 'Pronto para retirada',
        'finalizado' => 'Finalizado',
    ];

    /**
     * Ícones (Font Awesome) de cada etapa, usados no card de acompanhamento
     * do painel do funcionário (mesma esteira exibida no app mobile).
     */
    public const ETAPAS_ICONS = [
        'check_in' => 'fa-solid fa-clipboard-check',
        'banho' => 'fa-solid fa-shower',
        'secagem' => 'fa-solid fa-wind',
        'tosa' => 'fa-solid fa-scissors',
        'escovacao' => 'fa-solid fa-broom',
        'perfume' => 'fa-solid fa-spray-can-sparkles',
        'pronto_retirada' => 'fa-solid fa-box-open',
        'finalizado' => 'fa-solid fa-circle-check',
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

    /**
     * Quantidade de etapas já concluídas (todas antes da etapa atual; a
     * etapa atual só conta como concluída quando é a última da esteira).
     */
    public function etapasConcluidas(): int
    {
        if ($this->etapa_atual === self::ETAPAS[count(self::ETAPAS) - 1]) {
            return count(self::ETAPAS);
        }

        return $this->etapaIndex();
    }

    public function percentualConcluido(): int
    {
        return (int) round($this->etapasConcluidas() / count(self::ETAPAS) * 100);
    }

    /**
     * Monta a lista das 8 etapas já com rótulo, ícone e status (done/current/
     * pending) prontos para o card de acompanhamento do painel do
     * funcionário — evita lógica de índice espalhada pela view.
     */
    public function etapasParaExibicao(): array
    {
        $indiceAtual = $this->etapaIndex();
        $ultimoIndice = count(self::ETAPAS) - 1;
        $etapaAtualEhFinal = $indiceAtual === $ultimoIndice;

        $etapas = [];

        foreach (self::ETAPAS as $indice => $etapa) {
            if ($indice < $indiceAtual || ($indice === $indiceAtual && $etapaAtualEhFinal)) {
                $status = 'done';
            } elseif ($indice === $indiceAtual) {
                $status = 'current';
            } else {
                $status = 'pending';
            }

            $etapas[] = [
                'chave' => $etapa,
                'label' => self::ETAPAS_LABELS[$etapa],
                'icone' => self::ETAPAS_ICONS[$etapa],
                'status' => $status,
            ];
        }

        return $etapas;
    }
}
