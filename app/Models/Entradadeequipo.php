<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Entradadeequipo extends Model
{
    use HasFactory;

    protected $fillable = [
        'tipodedocumento',
        'consecutivo',
        'idcliente',
        'idtecnico',
        'fechadereporte',
        'observaciones',
        'estado',
        'estado01',
        'estado02',
        'estado03',
        'usuario_created',
        'usuario_updated',
    ];
}


