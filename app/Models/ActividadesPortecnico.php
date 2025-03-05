<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ActividadesPortecnico extends Model
{
    use HasFactory;

    protected $fillable = [
        'idactividad',
        'idtecnico',
        'factorcomision',
        'valorcomision',
        'estado',
        'usuario_created',
        'usuario_updated',
    ];
}

