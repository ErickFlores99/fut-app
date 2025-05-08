<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

//Importacion de modelos
use App\Models\User;

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
    }
}
