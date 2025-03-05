<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetalleReportedeviatico extends Model
{
    use HasFactory;
    protected $fillable = [
        'consecutivo',
        'idcomponente',
        'idtecnico',
        'fechadereporte',
        'cantidad',
        'valorunitario',
        'valor',
        'estado',
        'usuario_created',
        'usuario_updated',
    ];
}
