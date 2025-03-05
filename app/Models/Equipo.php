<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Equipo extends Model
{
    use HasFactory;

    protected $fillable = [
        'serial',
        'idfabricante',
        'modelo',
        'idcontrato',
        'idcliente',
        'descripcion',
        'anodefabricacion',
        'numerodecopias',
        'valorcopia',
        'costocopia',
        'totalcopiasnegro',
        'totalcopiascolor',
        'totalescaneo',
        'factordedepreciacion',
        'observaciones',
        'tipo',
        'estado',
        'usuario_created',
        'usuario_updated',
    ];
}

