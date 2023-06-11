<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOlimpiadasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('olimpiadas', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('edicionOlimpiada');
            $table->string('edicionModding');
            $table->string('cursoOlimpiada');
            $table->date('openDate');
            $table->date('closeDate');
            $table->date('eventDate');
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
        Schema::dropIfExists('olimpiadas');
    }
}
