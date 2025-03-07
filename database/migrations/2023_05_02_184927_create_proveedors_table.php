<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateProveedorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proveedores', function (Blueprint $table) {
            $table->id();
            $table->string('nit',20);
            $table->string('sucursal',10);
            $table->string('dv',1);
            $table->string('nombredelproveedor',250);
            $table->string('direcciondelproveedor',250);
            $table->string('telefonodelproveedor',50);
            $table->string('emaildelproveedor',250);
            $table->string('contacto',250);
            $table->string('telefonocontacto',100);
            $table->bigInteger('idciudad')->index();
            $table->float('latitud',15,8);
            $table->float('longitud',15,8);
            $table->decimal('estado',1,0);
            $table->string('usuario_created',20);
            $table->string('usuario_updated',20);
            $table->index(['nit','sucursal']);
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
        Schema::dropIfExists('proveedores');
    }
}
