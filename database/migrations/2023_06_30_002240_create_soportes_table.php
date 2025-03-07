<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateSoportesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('soportes', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('idorden')->index();
            $table->bigInteger('idcliente')->index();
            $table->bigInteger('idcontrato')->index();
            $table->bigInteger('idtecnico')->index();
            $table->date('fechadereporte')->index();
            $table->datetime('fechadeinicio');
            $table->datetime('fechafinal');
            $table->text('problemareportado');
            $table->text('diagnostico');
            $table->text('trabajorealizado');
            $table->decimal('quedofuncionando',1,0);
            $table->decimal('posiblesolucionremota',1,0);
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
        Schema::dropIfExists('soportes');
    }
}
