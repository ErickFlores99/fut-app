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
            $table->increments('id');
            $table->string('nombre');
            $table->string('escudo_url')->nullable();
            $table->time('horario')->nullable();
            $table->string('campo')->nullable();
            $table->string('ubicacion')->nullable();
            $table->char('estatus', 2)->default('AC')->comment('IN-Inactivo, AC-Activo');
            $table->timestamps();
        });

        Schema::create('equipos_liga', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('equipo_id')->nullable();
            $table->unsignedInteger('competencia_id')->nullable();
            $table->unsignedInteger('temporada_id')->nullable();
            $table->datetime('fecha_registro');
            $table->char('estatus', 2)->default('AC')->comment('IN-Inactivo, AC-Activo');
            $table->timestamps();

            $table->foreign('equipo_id')->references('id')->on('equipos');
            $table->foreign('competencia_id')->references('id')->on('competencias');
            $table->foreign('temporada_id')->references('id')->on('temporadas');
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
