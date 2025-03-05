<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Plantillaschecklist extends Model
{
    use HasFactory;

    protected $fillable = [
        'idchecklist',
        'idgrupo',
        'iditems',
        'orden',
        'estado',
        'usuario_created',
        'usuario_updated',
    ];
}

