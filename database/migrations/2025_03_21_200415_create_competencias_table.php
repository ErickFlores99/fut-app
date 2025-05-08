<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompetenciasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('competencias', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');
            $table->unsignedInteger('tipo_competencia_id')->nullable();
            $table->unsignedInteger('categoria_id')->nullable();
            $table->unsignedInteger('dia_juego_id')->nullable();
            $table->unsignedInteger('rama_id')->nullable();
            $table->unsignedInteger('temporada_id')->nullable();
            $table->char('estatus', 2)->default('AC')->comment('IN-Inactivo, AC-Activo, FN-Finalizado');
            $table->datetime('fecha_inicio')->nullable();
            $table->datetime('fecha_fin')->nullable();
            $table->string('reglamento_url')->nullable();
            $table->string('notas')->nullable();
            $table->unsignedInteger('created_by')->nullable();
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
        Schema::dropIfExists('competencias');
    }
}
