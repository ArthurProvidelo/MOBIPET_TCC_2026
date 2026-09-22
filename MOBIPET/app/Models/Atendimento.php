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
     * EtapaAtendimento do app Flutter. Usada como esteira completa (quando o
     * serviço não tem etapas configuradas) e como lista mestre de todas as
     * etapas possíveis, para ordenar e rotular a esteira resolvida por
     * serviço (ver Servico::etapasAtendimento()).
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
     * Etapas "do meio" que variam de serviço para serviço (o que o
     * funcionário escolhe no cadastro do serviço). check_in é sempre a
     * primeira etapa e pronto_retirada + finalizado são sempre as duas
     * últimas — essas três são estruturais e não entram nesta lista.
     */
    public const ETAPAS_CONFIGURAVEIS = [
        'banho',
        'secagem',
        'tosa',
        'escovacao',
        'perfume',
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

    /**
     * Esteira de etapas aplicável a este atendimento, resolvida a partir do
     * serviço escolhido (Servico::etapasAtendimento()). Cai para a esteira
     * completa (self::ETAPAS) se o serviço não tiver sido carregado ou não
     * existir mais.
     */
    public function etapasFluxo(): array
    {
        return $this->servico?->etapasAtendimento() ?? self::ETAPAS;
    }

    public function etapaIndex(): int
    {
        return array_search($this->etapa_atual, $this->etapasFluxo(), true);
    }

    public function proximaEtapa(): ?string
    {
        $etapas = $this->etapasFluxo();
        $proximoIndice = $this->etapaIndex() + 1;

        return $etapas[$proximoIndice] ?? null;
    }

    /**
     * Quantidade de etapas já concluídas (todas antes da etapa atual; a
     * etapa atual só conta como concluída quando é a última da esteira).
     */
    public function etapasConcluidas(): int
    {
        $etapas = $this->etapasFluxo();

        if ($this->etapa_atual === $etapas[count($etapas) - 1]) {
            return count($etapas);
        }

        return $this->etapaIndex();
    }

    public function percentualConcluido(): int
    {
        return (int) round($this->etapasConcluidas() / count($this->etapasFluxo()) * 100);
    }

    /**
     * Monta a esteira deste atendimento (etapasFluxo()) já com rótulo, ícone
     * e status (done/current/pending) prontos para o card de acompanhamento
     * do painel do funcionário — evita lógica de índice espalhada pela view.
     */
    public function etapasParaExibicao(): array
    {
        return self::montarEsteira($this->etapasFluxo(), $this->etapaIndex());
    }

    /**
     * Esteira "simulada" para agendamentos que nunca passaram pelo check-in
     * RFID (não têm Atendimento vinculado) — ex.: concluídos manualmente
     * antes do sistema de esteira existir. Deriva a etapa atual do próprio
     * status_agendamento, já que não há registro de progresso real: 100%
     * (Concluido) mostra a esteira toda finalizada, os demais status mostram
     * a esteira de acordo com o ponto em que o serviço normalmente estaria.
     * Usada pelo painel do funcionário no "Ver detalhes".
     */
    public static function esteiraSimulada(array $fluxo, string $statusAgendamento): array
    {
        $ultimoIndice = count($fluxo) - 1;

        $indiceAtual = match ($statusAgendamento) {
            'Concluido' => $ultimoIndice,
            'Em atendimento' => min(1, $ultimoIndice),
            default => -1,
        };

        $concluidas = $indiceAtual === $ultimoIndice ? count($fluxo) : max($indiceAtual, 0);

        return [
            'etapas' => self::montarEsteira($fluxo, $indiceAtual),
            'concluidas' => $concluidas,
            'total' => count($fluxo),
            'percentual' => (int) round($concluidas / count($fluxo) * 100),
        ];
    }

    /**
     * Monta a esteira (rótulo, ícone e status done/current/pending) para um
     * fluxo de etapas e um índice de etapa atual — compartilhado entre
     * etapasParaExibicao() (Atendimento real) e esteiraSimulada() (sem
     * Atendimento vinculado).
     */
    private static function montarEsteira(array $fluxo, int $indiceAtual): array
    {
        $ultimoIndice = count($fluxo) - 1;
        $etapaAtualEhFinal = $indiceAtual === $ultimoIndice;

        $etapas = [];

        foreach ($fluxo as $indice => $etapa) {
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
