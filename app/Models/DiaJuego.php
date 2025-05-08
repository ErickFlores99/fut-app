<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DiaJuego extends Model
{
    use HasFactory;

    protected $table = 'dias_juegos';

    protected $fillable = [
        'id',
        'nombre',
        'estatus',
    ];
}
