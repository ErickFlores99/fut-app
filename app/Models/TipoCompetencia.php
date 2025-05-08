<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoCompetencia extends Model
{
    use HasFactory;

    protected $table = 'tipos_competencias';

    protected $fillable = [
        'id',
        'nombre',
        'estatus',
    ];
}
