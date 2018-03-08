<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('carrera_id')->unsigned();
            $table->string('nombre');
            $table->string('apellidoP');
            $table->string('apellidoM');
            $table->integer('ci');
            $table->enum('turno', ['Mañana','Tarde','Completo']);
            $table->string('email');
            $table->integer('telefono');
            $table->string('password');
            $table->string('imagen');
            $table->timestamps();
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
