<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orden extends Model
{
    use HasFactory;

    protected $fillable = [
        'tipodedocumento',
        'consecutivo',
        'idequipo',
        'idcliente',
        'idcontrato',
        'idtecnico',
        'direccion',
        'telefono',
        'ciudad',
        'fechadeapertura',
        'fechadecierre',
        'fechadeviaje',
        'fechadeinicio',
        'fechafinal',
        'problemareportado',
        'diagnostico',
        'trabajorealizado',
        'totalnegro',
        'totalcolor',
        'totalescaneos',
        'valororden',
        'valordescuentos',
        'valoriva',
        'totaldocumento',
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
