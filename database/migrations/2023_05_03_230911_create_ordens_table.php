<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateOrdensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ordenes', function (Blueprint $table) {
            $table->id();
            $table->string('tipodedocumento',10);
            $table->decimal('consecutivo',10,0);
            $table->bigInteger('idequipo')->index();
            $table->bigInteger('idcliente')->index();
            $table->bigInteger('idcontrato')->index();
            $table->bigInteger('idtecnico')->index();
            $table->string('direccion',250);
            $table->string('telefono',50);
            $table->string('ciudad',100);
            $table->date('fechadeapertura')->index();
            $table->date('fechadecierre');
            $table->date('fechadeviaje');
            $table->datetime('fechadeinicio');
            $table->datetime('fechafinal');
            $table->text('problemareportado');
            $table->text('diagnostico');
            $table->text('trabajorealizado');
            $table->decimal('totalnegro',10,0);
            $table->decimal('totalcolor',10,0);
            $table->decimal('totalescaneos',10,0);
            $table->decimal('valororden',15,0);
            $table->decimal('valordescuentos',15,0);
            $table->decimal('valoriva',15,0);
            $table->decimal('totaldocumento',15,0);
            $table->decimal('quedofuncionando',1,0);
            $table->decimal('posiblesolucionremota',1,0);
            $table->decimal('estado',1,0);
            $table->decimal('estado01',1,0);
            $table->decimal('estado02',1,0);
            $table->decimal('estado03',1,0);
            $table->string('usuario_created',20);
            $table->string('usuario_updated',20);
            $table->index(['tipodedocumento','consecutivo']);
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
        Schema::dropIfExists('ordenes');
    }
}
