<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateDetallesdeentradasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detallesdeentradas', function (Blueprint $table) {
            $table->id();
            $table->decimal('consecutivo',10,0)->index();
            $table->bigInteger('idequipo')->index();
            $table->bigInteger('idcliente')->index();
            $table->bigInteger('idtecnico')->index();
            $table->bigInteger('identrada')->index();
            $table->bigInteger('idorden')->index();
            $table->date('fechadereporte')->index();
            $table->text('problemareportado');
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
        Schema::dropIfExists('detallesdeentradas');
    }
}
