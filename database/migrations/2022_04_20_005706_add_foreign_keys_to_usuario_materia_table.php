<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToUsuarioMateriaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('usuario_materia', function (Blueprint $table) {
            $table->foreign(['SisM_UM'], 'fk_Materia_has_Usuario_Materia1')->references(['SisM_M'])->on('materia');
            $table->foreign(['Id_U_UM'], 'fk_Materia_has_Usuario_Usuario1')->references(['Id_U'])->on('usuario');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('usuario_materia', function (Blueprint $table) {
            $table->dropForeign('fk_Materia_has_Usuario_Materia1');
            $table->dropForeign('fk_Materia_has_Usuario_Usuario1');
        });
    }
}
