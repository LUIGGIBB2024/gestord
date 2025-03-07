<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateProductosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productos', function (Blueprint $table) {
            $table->id();
            $table->string('codigo',20)->index();
            $table->string('descripcion',250);
            $table->string('numerodeparte',20);
            $table->string('unidad',10);
            $table->string('grupo',10);
            $table->string('subgrupo',10);
            $table->string('division',10);
            $table->decimal('porcentajedeiva',6,2);
            $table->decimal('valorventa',15,0);
            $table->decimal('costocompra',15,0);
            $table->decimal('costopromedio',15,0);
            $table->decimal('totalcopias',15,0);
            $table->decimal('totalescaneos',15,0);
            $table->decimal('totalcolor',15,0);
            $table->decimal('totalnegro',15,0);
            $table->decimal('tipo',1,0);
            $table->decimal('estado',1,0);
            $table->string('rutafoto',250);
            $table->string('foto',250);
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
        Schema::dropIfExists('productos');
    }
}
