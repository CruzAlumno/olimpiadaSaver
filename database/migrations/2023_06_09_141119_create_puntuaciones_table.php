<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePuntuacionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('puntuaciones', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_prueba');
            $table->unsignedBigInteger('id_equipo');
            $table->integer('puntuacion');
            $table->timestamps();

            $table->foreign('id_prueba')->references('id')->on('pruebas')->onDelete('cascade');
            $table->foreign('id_equipo')->references('id')->on('equipos')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        $table->dropForeign('puntuaciones_id_olimpiada_foreign');
        $table->dropForeign('puntuaciones_id_equipo_foreign');
        Schema::dropIfExists('puntuaciones');
    }
}
