<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateEquiposxcontratosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('equiposxcontratos', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('idcontrato');
            $table->bigInteger('idequipo');
            $table->decimal('valorarriendo',15,2);
            $table->decimal('factorcosto',15,8);
            $table->index(['idcontrato','idequipo']);
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
        Schema::dropIfExists('equiposxcontratos');
    }
}
