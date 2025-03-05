<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Equiposxcontrato extends Model
{
    use HasFactory;

    protected $fillable = [
        'idcontrato',
        'idequipo',
        'valorarriendo',
        'factorcosto',
        'estado',
        'usuario_created',
        'usuario_updated',
    ];
}
