<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsuarioMateriaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuario_materia', function (Blueprint $table) {
            $table->integer('SisM_UM');
            $table->integer('Id_U_UM')->index('fk_Materia_has_Usuario_Usuario1');

            $table->primary(['SisM_UM', 'Id_U_UM']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('usuario_materia');
    }
}
