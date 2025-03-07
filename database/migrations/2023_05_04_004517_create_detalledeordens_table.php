<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateDetalledeordensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detalledeordenes', function (Blueprint $table) {
            $table->id();
            $table->string('tipodedocumento',10);
            $table->decimal('consecutivo',10,0);
            $table->bigInteger('idequipo')->index();
            $table->bigInteger('idcliente')->index();
            $table->bigInteger('idtecnico')->index();
            $table->bigInteger('idproducto')->index();
            $table->bigInteger('idorden')->index();
            $table->date('fechadeapertura')->index();
            $table->date('fechadereporte')->index();
            $table->string('numerodeparte',30);
            $table->string('descripcion',250);
            $table->decimal('cantidad',15,2);
            $table->decimal('cantidadcambio',15,2);
            $table->decimal('cantidadpedir',15,2);
            $table->decimal('cantidadcotizar',15,2);
            $table->decimal('valorventa',22,8);
            $table->decimal('valorcotizacion',22,8);
            $table->decimal('costopromedio',22,8);
            $table->decimal('ivaproducto',6,2);
            $table->decimal('totalregistro',15,0);
            $table->decimal('estado',1,0);
            $table->string('usuario_created',20);
            $table->string('usuario_updated',20);
            $table->index(['tipodedocumento','consecutivo','idproducto']);
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
        Schema::dropIfExists('detalledeordenes');
    }
}
