<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Checklistxorden extends Model
{
    use HasFactory;

    protected $fillable = [
        'idorden',
        'idchecklist',
        'idgrupo',
        'iditems',
        'orden',
        'inspeccion',
        'limpieza',
        'cambio',
        'observaciones',
        'estado',
        'usuario_created',
        'usuario_updated',
    ];
}



