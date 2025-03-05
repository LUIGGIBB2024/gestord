<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Componentesdeviatico extends Model
{
    use HasFactory;
    protected $fillable = [
        'idviaticos',
        'iditems',
        'codigo',
        'descripcion',
        'valor',
        'estado',
        'usuario_created',
        'usuario_updated',
    ];

}


$table->bigInteger('idviaticos')->index();
$table->string('codigo',20)->index();
$table->string('descripcion',250);
$table->decimal('valor',15,0);
$table->decimal('estado',1,0);
