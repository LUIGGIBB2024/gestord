<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reportedeviatico extends Model
{
    use HasFactory;

    protected $fillable = [
        'consecutivo',
        'numerodeorden',
        'idviaticos',
        'idtecnico',
        'idcliente',
        'idorden',
        'fechadereporte',
        'observaciones',
        'totaldocumento',
        'estado',
        'usuario_created',
        'usuario_updated',
    ];
}
