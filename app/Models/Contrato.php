<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contrato extends Model
{
    use HasFactory;
    protected $fillable = [
        'numerointerno',
        'idcliente',
        'desdefecha',
        'hastafecha',
        'numerodeequipos',
        'observaciones',
        'tipodecontrato',
        'valordelcontrato',
        'estado',
        'usuario_created',
        'usuario_updated',
    ];
}
