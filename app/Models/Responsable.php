<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Responsable extends Model
{
    use HasFactory;

    protected $table = 'responsables';

    // Especificamos los campos que pueden ser asignados masivamente
    protected $fillable = [
        'id',
        'nombre',
        'tel',
        'email',
        'estatus',
    ];

    // Relación muchos a uno con equipo
    public function equipo()
    {
        return $this->belongsTo(Equipo::class, 'equipo_id');
    }
}
