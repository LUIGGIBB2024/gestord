<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;
    protected $fillable = [
        'codigo',
        'descripcion',
        'numerodeparte',
        'grupo',
        'subgrupo',
        'division',
        'unidad',
        'porcentajedeiva',
        'costocompra',
        'costopromedio',
        'totalcopias',
        'totalescaneos',
        'totalcolor',
        'totalnegro',
        'tipo',
        'estado',
        'rutafoto',
        'foto',
        'usuario_created',
        'usuario_updated',
    ];
}


