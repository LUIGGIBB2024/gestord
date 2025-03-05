<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Detalledemiscelaneo extends Model
{
    use HasFactory;

    protected $fillable = [
        'idmiscelaneo',
        'codigo',
        'descripcion',
        'estado',
        'usuario_created',
        'usuario_updated',
    ];
}

