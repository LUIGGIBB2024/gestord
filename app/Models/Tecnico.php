<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tecnico extends Model
{
    use HasFactory;
    protected $fillable = [
        'codigo',
        'nombredeltecnico',
        'cedula',
        'telefonodeltecnico',
        'emaildeltecnico',
        'tipo',
        'estado',
        'usuario_created',
        'usuario_updated',
    ];
}


