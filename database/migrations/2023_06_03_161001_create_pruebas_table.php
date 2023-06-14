<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePruebasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pruebas', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->text('descripcion');
            $table->enum('grado', array('medio', 'superior', 'modding'));
            $table->unsignedBigInteger('id_olimpiada');
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
        $table->dropForeign('pruebas_id_olimpiada_foreign');
        Schema::dropIfExists('pruebas');
    }
}
