<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateEquiposTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('equipos', function (Blueprint $table) {
            $table->id();
            $table->string('serial',30);
            $table->bigInteger('idfabricante')->index();
            $table->string('modelo',20);
            $table->bigInteger('idcontrato')->index();
            $table->bigInteger('idcliente')->index();
            $table->string('descripcion',250);
            $table->string('anodefabricacion',4);
            $table->decimal('numerodecopias',10,0);
            $table->decimal('totalcopiasnegro',10,0);
            $table->decimal('totalcopiascolor',10,0);
            $table->decimal('totalescaneo',10,0);
            $table->decimal('valorcopia',15,2);
            $table->decimal('costocopia',15,2);
            $table->decimal('factordedepreciacion',20,8);
            $table->text('observaciones');
            $table->bigInteger('tipo');
            $table->decimal('estado',1,0);
            $table->string('usuario_created',20);
            $table->string('usuario_updated',20);
            $table->index(['serial','idfabricante']);
            $table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('updated_at')->default(DB::raw('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'));
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('equipos');
    }
}
