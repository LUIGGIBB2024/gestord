<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateControlsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('controlapp', function (Blueprint $table) {
            $table->id();
            $table->string('nit',20);
            $table->string('nombredelaempresa',250);
            $table->string('direcciondelaempresa',250);
            $table->string('telefonodelaempresa',50);
            $table->string('emaildelaempresa',250);
            $table->string('ciudad',100);
            $table->string('anodeproceso',4);
            $table->string('mesdeproceso',2);
            $table->decimal('consecutivo',10,0);
            $table->decimal('consecutivoviaticos',10,0);
            $table->decimal('consecutivoentrada',10,0);
            $table->decimal('estado',1,0);
            $table->string('nombredelremitente');
            $table->string('correodeenvio');
            $table->string('smtp',100);
            $table->string('puerto_correo',10);
            $table->string('logoempresa',255);
            $table->string('password_correo');
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
        Schema::dropIfExists('controlapp');
    }
}
