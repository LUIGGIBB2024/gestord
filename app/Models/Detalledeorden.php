<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Detalledeorden extends Model
{
    use HasFactory;

    protected $fillable = [
        'tipodedocumento',
        'consecutivo',
        'idequipo',
        'idcliente',
        'idtecnico',
        'idproducto',
        'idorden',
        'fechadeapertura',
        'fechadereporte',
        'numerodeparte',
        'descripcion',
        'cantidad',
        'cantidadcambio',
        'cantidadpedir',
        'cantidadcotizar',
        'valorventa',
        'valorcotizacion',
        'costopromedio',
        'ivaproducto',
        'totalregistro',
        'estado',
        'usuario_created',
        'usuario_updated',
    ];
}
