<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AtendimentoEtapa extends Model
{
    protected $table = 'atendimento_etapas';

    protected $primaryKey = 'id_atendimento_etapa';

    public $timestamps = false;

    protected $fillable = [
        'fk_id_atendimento',
        'etapa',
        'concluida_em',
    ];

    protected $casts = [
        'concluida_em' => 'datetime',
    ];
}
