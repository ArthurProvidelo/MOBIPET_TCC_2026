<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pet extends Model
{
    use HasFactory;

    protected $table = 'Pet';

    protected $primaryKey = 'id_pet';

    protected $fillable = [
        'nome',
        'especie',
        'raca',
        'porte',
        'data_nascimento',
        'fk_id_cliente'
    ];

    public $timestamps = false;
}