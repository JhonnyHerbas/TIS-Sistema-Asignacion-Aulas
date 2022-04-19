<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsuarioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuario', function (Blueprint $table) {
            $table->string('Id_U', 10)->primary();
            $table->string('Nomb_U', 25);
            $table->string('Cont_U', 20);
            $table->string('Corr_U', 50)->nullable();
            $table->string('ApelPate_U', 15);
            $table->string('ApelMate_U', 15)->nullable();
            $table->integer('Rol_U');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('usuario');
    }
}
