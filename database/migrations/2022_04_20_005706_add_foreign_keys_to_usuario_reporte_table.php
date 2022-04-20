<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToUsuarioReporteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('usuario_reporte', function (Blueprint $table) {
            $table->foreign(['Id_RR_UR'], 'fk_Usuario_has_Reporte_Reserva_Reporte_Reserva1')->references(['Id_RR'])->on('reporte_reserva');
            $table->foreign(['Id_U_UR'], 'fk_Usuario_has_Reporte_Reserva_Usuario1')->references(['Id_U'])->on('usuario');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('usuario_reporte', function (Blueprint $table) {
            $table->dropForeign('fk_Usuario_has_Reporte_Reserva_Reporte_Reserva1');
            $table->dropForeign('fk_Usuario_has_Reporte_Reserva_Usuario1');
        });
    }
}
