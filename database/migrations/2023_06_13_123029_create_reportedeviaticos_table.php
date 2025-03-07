<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateReportedeviaticosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reportedeviaticos', function (Blueprint $table) {
            $table->id();
            $table->decimal('consecutivo',10,0)->index();
            $table->decimal('numerodeorden',10,0)->index();
            $table->bigInteger('idviaticos')->index();
            $table->bigInteger('idtecnico')->index();
            $table->bigInteger('idcliente')->index();
            $table->bigInteger('idorden')->index();
            $table->date('fechadereporte')->index();
            $table->text('observaciones');
            $table->decimal('totaldocumento',15,0);
            $table->decimal('estado',1,0);
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
        Schema::dropIfExists('reportedeviaticos');
    }
}
