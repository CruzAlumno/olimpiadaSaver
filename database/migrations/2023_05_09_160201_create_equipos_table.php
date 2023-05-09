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
            $table->enum('grado', array('medio', 'superior'));
            $table->float('prueba1')->nullable()->default(null);
            $table->float('prueba2')->nullable()->default(null);
            $table->float('prueba3')->nullable()->default(null);
            $table->float('prueba4')->nullable()->default(null);
            $table->float('prueba5')->nullable()->default(null);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('equipos');
    }
}
