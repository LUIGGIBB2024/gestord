<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Actividad extends Model
{
    use HasFactory;

    protected $fillable = [
        'codigo',
        'descripcion',
        'tipo',
        'estado',
        'valorventa',
        'costotecnico',
        'usuario_created',
        'usuario_updated',
    ];
}
