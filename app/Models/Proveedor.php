<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proveedor extends Model
{
    use HasFactory;

    protected $fillable = [
        'nit',
        'sucursal',
        'dv',
        'nombredelproveedor',
        'direcciondelproveedor',
        'telefonodelproveedor',
        'emaildelproveedor',
        'contacto',
        'telefonocontacto',
        'idciudad',
        'latitud',
        'longitud',
        'estado',
        'usuario_created',
        'usuario_updated',
    ];
}

