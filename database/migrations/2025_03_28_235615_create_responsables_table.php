<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateResponsablesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('responsables', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');
            $table->string('tel')->nullable();
            $table->string('email')->nullable();
            $table->char('estatus', 2)->default('AC')->comment('IN-Inactivo, AC-Activo');
            $table->timestamps();
        });

        Schema::create('responsables_equipo', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('equipo_id')->nullable();
            $table->unsignedInteger('responsable_id')->nullable();
            $table->timestamps();
            
            $table->foreign('equipo_id')->references('id')->on('equipos');
            $table->foreign('responsable_id')->references('id')->on('responsables');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('responsables_equipo');
        Schema::dropIfExists('responsables');
    }
}
