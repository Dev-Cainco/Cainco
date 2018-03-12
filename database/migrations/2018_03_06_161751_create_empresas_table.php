<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmpresasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empresas', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('usuario_id')->unsigned();
            $table->integer('pagos_id')->unsigned();
            $table->integer('categoria_id')->unsigned();
            $table->string('nombre');
            $table->string('email');
            $table->string('descripcion');
            $table->string('password');
            $table->string('direccion');
            $table->string('imagen');
            $table->string('sitio_web');
            $table->timestamps();
            $table->SoftDeletes();
            $table->foreign('usuario_id')->references('id')->on('users');
            $table->foreign('pagos_id')->references('id')->on('pagos');
            $table->foreign('categoria_id')->references('id')->on('categorias');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('empresas');
    }
}
