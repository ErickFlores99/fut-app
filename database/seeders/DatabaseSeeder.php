<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

//Importacion de modelos
use App\Models\User;
use App\Models\TipoCompetencia;
use App\Models\Categoria;
use App\Models\DiaJuego;
use App\Models\Rama;
use App\Models\Temporada;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // Crear usuario administrador
        User::create([
            'name' => 'Admin',
            'email' => 'admin@app.com',
            'password' => Hash::make('admin'), // Encripta la contraseña
            'rol' => 0 // Rol de Administrador
        ]);

        \App\Models\User::factory(10)->create();

        // Crear  Competencias base
        TipoCompetencia::create([
            'nombre' => 'Liga'
        ]);
        TipoCompetencia::create([
            'nombre' => 'Torneo'
        ]);
        TipoCompetencia::create([
            'nombre' => 'Copa'
        ]);

        // Crear Categorias base
        Categoria::create([
            'nombre' => 'Libre'
        ]);
        Categoria::create([
            'nombre' => 'Segunda'
        ]);
        Categoria::create([
            'nombre' => 'Veteranos'
        ]);
        Categoria::create([
            'nombre' => 'Infantil'
        ]);

        // Crear Dias de Juego base
        DiaJuego::create([
            'nombre' => 'Sabatina'
        ]);
        DiaJuego::create([
            'nombre' => 'Dominical'
        ]);
        DiaJuego::create([
            'nombre' => 'Nocturna'
        ]);

        // Crear las Ramas base
        Rama::create([
            'nombre' => 'Varonil'
        ]);
        Rama::create([
            'nombre' => 'Femenil'
        ]);
        Rama::create([
            'nombre' => 'Mixta'
        ]);

        // Crear las Temporadas base
        Temporada::create([
            'nombre' => 'Apertura'
        ]);
        Temporada::create([
            'nombre' => 'Clausura'
        ]);
    }
}
