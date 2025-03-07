<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateReportedelecturasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reportedelecturas', function (Blueprint $table) {
            $table->id();
            $table->date('fechadereporte')->index();
            $table->bigInteger('idequipo')->index();
            $table->bigInteger('idcliente')->index();
            $table->decimal('lecturadecopias',20,0);
            $table->decimal('lecturadeescaneos',20,0);
            $table->string('lapso',6);
            $table->decimal('estado',1,0);
            $table->decimal('estado01',1,0);
            $table->decimal('estado02',1,0);
            $table->decimal('estado03',1,0);
            $table->string('usuario_created',20);
            $table->string('usuario_updated',20);
            $table->index(['fechadereporte','idequipo'],'reporte_idx');
            $table->index(['lapso','idequipo','idcliente'],'lapso_idx');
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
        Schema::dropIfExists('reportedelecturas');
    }
}
