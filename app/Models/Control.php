<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Control extends Model
{
    use HasFactory;
    protected $table =  'controlapp';

    protected $fillable = [
        'nit',
        'nombredelaempresa',
        'direcciondelaempresa',
        'telefonodelaempresa',
        'emaildelaempresa',
        'anodeproceso',
        'mesdeproceso',
        'consecutivo',
        'consecutivoviaticos',
        'consecutivoentrada',
        'estado',
        'nombredelremitente',
        'correodeenvio',
        'smtp',
        'puerto_correo',
        'password_correo',
        'logoempresa',
        'usuario_created',
        'usuario_updated',
    ];
}


