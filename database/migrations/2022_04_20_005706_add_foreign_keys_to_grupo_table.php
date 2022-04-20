<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToGrupoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('grupo', function (Blueprint $table) {
            $table->foreign(['SisM_M_G'], 'fk_Grupo_Materia')->references(['SisM_M'])->on('materia');
            $table->foreign(['Id_U_G'], 'fk_grupo_usuario1')->references(['Id_U'])->on('usuario')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('grupo', function (Blueprint $table) {
            $table->dropForeign('fk_Grupo_Materia');
            $table->dropForeign('fk_grupo_usuario1');
        });
    }
}
