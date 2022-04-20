<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToUsuarioSolicitudTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('usuario_solicitud', function (Blueprint $table) {
            $table->foreign(['Id_SR_US'], 'fk_Usuario_has_Solicitud_Reserva_Solicitud_Reserva1')->references(['Id_SR'])->on('solicitud_reserva');
            $table->foreign(['Id_U_US'], 'fk_Usuario_has_Solicitud_Reserva_Usuario1')->references(['Id_U'])->on('usuario');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('usuario_solicitud', function (Blueprint $table) {
            $table->dropForeign('fk_Usuario_has_Solicitud_Reserva_Solicitud_Reserva1');
            $table->dropForeign('fk_Usuario_has_Solicitud_Reserva_Usuario1');
        });
    }
}
