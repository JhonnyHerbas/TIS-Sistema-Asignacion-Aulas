<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSolicitudReservaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('solicitud_reserva', function (Blueprint $table) {
            $table->integer('Id_SR')->primary();
            $table->date('Fech_SR');
            $table->time('HoraInic_SR');
            $table->integer('NumePeri_SR');
            $table->integer('NumeEstu_SR');
            $table->tinyInteger('EstaAten_SR');
            $table->string('Moti_SR', 150)->nullable();
            $table->string('Dia_SR', 10);
            $table->time('HoraFina_SR');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('solicitud_reserva');
    }
}
