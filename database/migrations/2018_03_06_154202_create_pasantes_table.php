<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePasantesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pasantes', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('universidad_id')->unsigned();
            $table->integer('carrera_id')->unsigned();
            $table->string('nombre');
            $table->string('apellidoP');
            $table->string('apellidoM');
            $table->integer('ci');
            $table->string('password');
            $table->enum('turno', ['Mañana','Tarde','Completo']);
            $table->string('email');
            $table->integer('telefono');
            $table->string('imagen');
            $table->date('fecha_inicio');
            $table->time('total_horas');
            $table->timestamps();

            $table->foreign('universidad_id')->references('id')->on('universidads');
            $table->foreign('carrera_id')->references('id')->on('carreras');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pasantes');
    }
}
