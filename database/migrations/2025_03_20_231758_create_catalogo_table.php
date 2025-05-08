<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCatalogoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categorias', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre')->nullable();
            $table->char('estatus', 2)->default('AC')->comment('IN-Inactivo, AC-Activo');
            $table->timestamps();
        });

        Schema::create('dias_juegos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre')->nullable();
            $table->char('estatus', 2)->default('AC')->comment('IN-Inactivo, AC-Activo');
            $table->timestamps();
        });

        Schema::create('ramas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre')->nullable();
            $table->char('estatus', 2)->default('AC')->comment('IN-Inactivo, AC-Activo');
            $table->timestamps();
        });

        Schema::create('tipos_competencias', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre')->nullable();
            $table->char('estatus', 2)->default('AC')->comment('IN-Inactivo, AC-Activo');
            $table->timestamps();
        });

        Schema::create('temporadas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre')->nullable();
            $table->char('estatus', 2)->default('AC')->comment('IN-Inactivo, AC-Activo');
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
        Schema::dropIfExists('temporadas');
        Schema::dropIfExists('tipo_competencias');
        Schema::dropIfExists('ramas');
        Schema::dropIfExists('dias_juego');
        Schema::dropIfExists('categorias');
    }
}
