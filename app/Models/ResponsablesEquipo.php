<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ResponsablesEquipo extends Model
{
    use HasFactory;

    protected $table = 'responsables_equipo';

    protected $fillable = [
        'equipo_id',
        'responsable_id',
    ];
}
