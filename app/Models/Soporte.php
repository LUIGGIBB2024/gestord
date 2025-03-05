<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Soporte extends Model
{
    use HasFactory;
    protected $fillable = [
        'idcliente',
        'idcontrato',
        'idtecnico',
        'fechadereporte',
        'fechadeinicio',
        'fechafinal',
        'problemareportado',
        'diagnostico',
        'trabajorealizado',
        'quedofuncionando',
        'posiblesolucionremota',
        'estado',
        'estado01',
        'estado02',
        'estado03',
        'usuario_created',
        'usuario_updated',
    ];
}


