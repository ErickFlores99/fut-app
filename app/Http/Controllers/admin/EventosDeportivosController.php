<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EventosDeportivosController extends Controller
{
    public function index()
    {
        return view('app.admin.ligas_torneos.index');
    }

    public function datosBasicos() {

        return view('app.admin.ligas_torneos.ajax.form-nvaCompetencia');//, [
            //Obtenemos todas la informacion del catalogo
            //"eventosDeportivos" => EventoDeportivo::with('competencia', 'categoria', 'diaJuego', 'rama')->get(),
        //]);
    } 

    public function mostrarCompetencia() {

        return view('app.admin.ligas_torneos.ajax.list-competencias', [
            //Obtenemos todas la informacion del catalogo
            //"eventosDeportivos" => EventoDeportivo::with('competencia', 'categoria', 'diaJuego', 'rama')->get(),
        ]);
       
    }
}
