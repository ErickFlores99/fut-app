<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Ruta pública (Landing page)
Route::get('/', function () {
    return view('app.public.index');
})->name('public_home');

// Rutas de autenticación Breeze
require __DIR__.'/auth.php';

/**************************************************************************
 * 
 *  Ruta de administración (requiere autenticación)
 *  Redirigir a login si el usuario no está autenticado
 * 
**************************************************************************/
Route::middleware(['auth', 'revalidate'])->group(function () {

    // Ruta principal del dashboard
    Route::get('/app', function () {
        return view('app.admin.index');
    })->name('admin_home');

    // Grupo para la sección "Ligas / Torneos"
    Route::prefix('competencias')->name('competencias.')->group(function () {
        
        // Rutas para todas las competencias
        Route::get('/', [App\Http\Controllers\Admin\CompetenciaController::class, 'index'])
            ->name('index');

        Route::get('/mostrar', [App\Http\Controllers\Admin\CompetenciaController::class, 'mostrarCompetencia'])
            ->name('mostrar');

        Route::get('nueva/datos-basicos', [App\Http\Controllers\Admin\CompetenciaController::class, 'datosBasicos'])
            ->name('datos');

        Route::post('/crear', [App\Http\Controllers\Admin\CompetenciaController::class, 'crearCompetencia'])
            ->name('crear');

        // Rutas para el detalle de una competencia específica
        Route::get('/{id}', [App\Http\Controllers\Admin\CompetenciaController::class, 'detalleIndex'])
            ->name('detalle'); // competencias.detalle
    });

});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

