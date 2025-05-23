<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use RealRashid\SweetAlert\Facades\Alert;

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
        return view('app.admin.competencias.inicio.index');
    }

    public function datosBasicos() {

        return view('app.admin.competencias.inicio.ajax.form-nvaCompetencia', [
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
        //Obtenemos todas las competencias registadas
        return view('app.admin.competencias.inicio.ajax.list-competencias', [
            "competencias" => Competencia::with('tipoCompetencia', 'categoria', 'diaJuego', 'rama')->get(),    
        ]);  
    }

    public function crearCompetencia(Request $request) {
        // Obtener los datos enviados desde el formulario
        $nombre = $request->input('nombre');
        $idTipoCompetencia = $request->input('idTipoCompetencia');
        $nombre_nvoTipoCompetencia = $request->input('nombre_nvoTipoCompetencia');
        $idDiaJuego = $request->input('idDiaJuego');
        $idCategoria = $request->input('idCategoria');
        $idRama = $request->input('idRama');
        $fechaInicio = $request->input('fechaInicio');
        $notas = $request->input('notas');

        //convercion de nombre a mayusculas
        $mayusNom = strtoupper($nombre);

        //buscamos que no exista una liga o torneo con las mismas especificacines.
        $competencia = Competencia::where('nombre', $mayusNom)
            ->where('tipo_competencia_id', $idTipoCompetencia)
            ->where('categoria_id', $idCategoria)
            ->where('dia_juego_id', $idDiaJuego)
            ->where('rama_id', $idRama)
        ->first();

        if (!$competencia) {
            //verificamos si no es una nueva competencia
            if ($idTipoCompetencia == 0) {
                //creamos la nueva compencia
                $tipoCompetencia = TipoCompetencia::create([
                    'nombre' => $nombre_nvoTipoCompetencia,
                ]);

                $idTipoCompetencia = $tipoCompetencia->id;
            }

            //creamos el nuevo evento deportivo
            $competencia = Competencia::create([
                'nombre' => $mayusNom,
                'tipo_competencia_id' => $idTipoCompetencia,
                'categoria_id' => $idCategoria,
                'dia_juego_id' => $idDiaJuego,
                'rama_id' => $idRama,
                'notas' => $notas,
                'created_by' => auth()->id(),
            ]);

            return response()->json([
                'status' => true,
                'message' => 'Guardado correctamente'
            ]);

        } else{
            return response()->json([
                'status' => false,
                'message' => 'Se encontro una competencia ya registrada con los datos'
            ]);
        }
    }

    public function detalleIndex($id)
    {
        // Obtener la competencia con sus relaciones
        $competencia = Competencia::with('tipoCompetencia', 'categoria', 'diaJuego', 'rama')->find($id);

        if ($competencia) {
            // Retornar la vista con la competencia
            return view('app.admin.competencias.detalle.index', [
                "competencia" => $competencia,
            ]);
        } else {
            // OPCIONAL: mostrar una alerta si tienes SweetAlert2
            Alert::error('Error', 'La competencia no existe o fue eliminada');

            // Redirigir a la ruta de inicio de competencias
            return redirect()->route('competencias.index');
        }
    }
}
