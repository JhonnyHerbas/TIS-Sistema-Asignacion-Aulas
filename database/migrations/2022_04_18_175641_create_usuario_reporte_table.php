<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsuarioReporteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuario_reporte', function (Blueprint $table) {
            $table->string('Id_U_UR', 10);
            $table->integer('Id_RR_UR')->index('fk_Usuario_has_Reporte_Reserva_Reporte_Reserva1');

            $table->primary(['Id_U_UR', 'Id_RR_UR']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('usuario_reporte');
    }
}
