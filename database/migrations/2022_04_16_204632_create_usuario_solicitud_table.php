<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsuarioSolicitudTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuario_solicitud', function (Blueprint $table) {
            $table->string('Id_U_US', 10)->index('fk_Usuario_has_Solicitud_Reserva_Usuario1_idx');
            $table->integer('Id_SR_US')->index('fk_Usuario_has_Solicitud_Reserva_Solicitud_Reserva1_idx');

            $table->primary(['Id_U_US', 'Id_SR_US']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('usuario_solicitud');
    }
}
