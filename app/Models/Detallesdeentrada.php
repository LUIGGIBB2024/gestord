<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Detallesdeentrada extends Model
{
    use HasFactory;

    protected $fillable = [
        'consecutivo',
        'idequipo',
        'idcliente',
        'idtecnico',
        'identrada',
        'idorden',
        'fechadereporte',
        'problemareportado',
        'estado',
        'estado01',
        'estado02',
        'estado03',
        'usuario_created',
        'usuario_updated',
    ];

}
