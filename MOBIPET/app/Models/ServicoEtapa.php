<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ServicoEtapa extends Model
{
    protected $table = 'servico_etapas';

    protected $primaryKey = 'id_servico_etapa';

    public $timestamps = false;

    protected $fillable = [
        'fk_id_servico',
        'etapa',
        'ordem',
    ];

    public function servico()
    {
        return $this->belongsTo(Servico::class, 'fk_id_servico', 'id_servico');
    }
}
