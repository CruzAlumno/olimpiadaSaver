<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePatrocinadoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patrocinadores', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('logotipo');
            $table->unsignedBigInteger('id_prueba');
            $table->timestamps();

            $table->foreign('id_prueba')->references('id')->on('pruebas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        $table->dropForeign('patrocinadores_id_prueba_foreign');
        Schema::dropIfExists('patrocinadores');
    }
}
