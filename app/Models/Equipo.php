<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Equipo extends Model
{
    use HasFactory;

    protected $table = 'equipos';

    // Especificamos los campos que pueden ser asignados masivamente
    protected $fillable = [
        'nombre',
        'escudo_url',
        'horario',
        'campo',
        'ubicacion',
        'estatus',
    ];

    // Relación muchos a muchos con responsables
    public function responsables()
    {
        return $this->belongsToMany(Responsable::class, 'responsables_equipo', 'equipo_id', 'responsable_id');
    }
}
