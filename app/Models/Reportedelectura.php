<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reportedelectura extends Model
{
    use HasFactory;
    protected $fillable = [
        'fechadereporte',
        'idequipo',
        'idcliente',
        'lecturadecopias',
        'lecturadeescaneos',
        'lapso',
        'estado',
        'estado01',
        'estado02',
        'estado03',
        'usuario_created',
        'usuario_updated',
    ];
}

