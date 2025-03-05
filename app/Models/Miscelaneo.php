<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Miscelaneo extends Model
{
    use HasFactory;

    protected $fillable = [
        'codigo',
        'descripcion',
        'estado',
        'usuario_created',
        'usuario_updated',
    ];
}


