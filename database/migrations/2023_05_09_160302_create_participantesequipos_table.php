<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateParticipantesEquiposTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('participantesequipos', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->bigInteger('id_participante')->unsigned();
            $table->bigInteger('id_equipo')->unsigned();

            $table->foreign('id_participante')->references('id')->on('participantes');
            $table->foreign('id_equipo')->references('id')->on('equipos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        $table->dropForeign('participantesequipos_id_participante_foreign');
        $table->dropForeign('participantesequipos_id_equipo_foreign');

        Schema::dropIfExists('participantesequipos');
    }
}
