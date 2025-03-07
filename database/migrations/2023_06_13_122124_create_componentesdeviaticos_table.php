<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateComponentesdeviaticosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('componentesdeviaticos', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('idviaticos')->index();
            $table->bigInteger('iditems')->index();
            $table->string('codigo',20)->index();
            $table->string('descripcion',250);
            $table->decimal('valor',15,0);
            $table->decimal('estado',1,0);
            $table->string('usuario_created',20);
            $table->string('usuario_updated',20);
            $table->index(['idviaticos','codigo']);
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
        Schema::dropIfExists('componentesdeviaticos');
    }
}
