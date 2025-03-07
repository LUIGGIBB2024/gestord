<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateActividadesPortecnicosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('actividadesxtecnicos', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('idactividad');
            $table->bigInteger('idtecnico');
            $table->decimal('factorcomision',15,8);
            $table->decimal('valorcomision',15,2);
            $table->index(['idactividad','idtecnico']);
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
        Schema::dropIfExists('actividadesxtecnicos');
    }
}
