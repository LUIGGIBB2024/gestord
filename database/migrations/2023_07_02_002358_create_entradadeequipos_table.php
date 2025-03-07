<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateEntradadeequiposTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('entradadeequipos', function (Blueprint $table) {
            $table->id();
            $table->string('tipodedocumento',10);
            $table->string('descripcionequipo',150);
            $table->decimal('consecutivo',10,0)->index();
            $table->string('nit',20);
            $table->string('nombre',250);
            $table->string('direccion',150);
            $table->string('telefono',50);
            $table->string('serial',50)->index();
            $table->string('modelo',20);
            $table->bigInteger('idcliente')->index();
            $table->bigInteger('idtecnico')->index();
            $table->date('fechadereporte')->index();
            $table->text('reporte');
            $table->text('observaciones');
            $table->text('rutafirma');
            $table->decimal('estado',1,0);
            $table->decimal('estado01',1,0);
            $table->decimal('estado02',1,0);
            $table->decimal('estado03',1,0);
            $table->string('usuario_created',20);
            $table->string('usuario_updated',20);
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
        Schema::dropIfExists('entradadeequipos');
    }
}
