<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEquiposTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('equipos', function (Blueprint $table) {
            $table->id();
            $table->string('nombreEquipo');
            $table->string('nombreCentro');
            $table->text('participantes');
            $table->enum('grado', array('medio', 'superior', 'modding'));
            $table->boolean('confirmed')->default(false);
            $table->bigInteger('id_olimpiada')->unsigned();
            $table->timestamps();

            $table->foreign('id_olimpiada')->references('id')->on('olimpiadas')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        $table->dropForeign('equipos_id_olimpiada_foreign');
        Schema::dropIfExists('equipos');
    }
}
