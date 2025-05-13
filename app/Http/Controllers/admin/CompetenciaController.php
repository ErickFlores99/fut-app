<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Competencia;
use App\Models\Categoria;
use App\Models\TipoCompetencia;
use App\Models\diaJuego;
use App\Models\Rama;
use App\Models\Temporada;
use App\Models\Equipo;
use App\Models\User;

class CompetenciaController extends Controller
{
    public function index()
    {
        return view('app.admin.competencias.index');
    }

    public function datosBasicos() {

        return view('app.admin.competencias.ajax.form-nvaCompetencia', [
            //Obtenemos todas la informacion del catalogo
            "categorias" => Categoria::all(),
            "tiposCompetencias" => TipoCompetencia::all(),
            "diasJuego" => DiaJuego::all(),
            "ramas" => Rama::all(),
            "temporadas" => Temporada::all(),
            "equipos" => Equipo::all(),
        ]);
    } 

    public function mostrarCompetencia() {

        return view('app.admin.competencias.ajax.list-competencias', [
            //Obtenemos todas la informacion del catalogo
            //"eventosDeportivos" => EventoDeportivo::with('competencia', 'categoria', 'diaJuego', 'rama')->get(),
        ]);  
    }
}
