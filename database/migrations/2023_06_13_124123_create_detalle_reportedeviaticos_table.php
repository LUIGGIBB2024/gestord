<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateDetalleReportedeviaticosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */

     public function up()
     {
         Schema::create('detalle_reportedeviaticos', function (Blueprint $table) {
            $table->id();
            $table->decimal('consecutivo',10,0)->index();
            $table->bigInteger('idcomponente')->index();
            $table->bigInteger('idtecnico')->index();
            $table->bigInteger('idviaticos')->index();
            $table->date('fechadereporte')->index();
            $table->decimal('cantidad',15,2);
            $table->decimal('valorunitario',15,2);
            $table->decimal('valor',15,0);
            $table->decimal('estado',1,0);
            $table->string('usuario_created',20);
            $table->string('usuario_updated',20);
            $table->index(['consecutivo','idcomponente'],'consecutivoidcom_idx');
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
        Schema::dropIfExists('detalle_reportedeviaticos');
    }
}
