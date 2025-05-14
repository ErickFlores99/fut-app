<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Competencia extends Model
{
    use HasFactory;

    protected $table = 'competencias';

    protected $fillable = [
        'id',
        'nombre',
        'tipo_competencia_id',
        'categoria_id',
        'dia_juego_id',
        'rama_id',
        'temporada_id',
        'estatus',
        'fecha_inicio',
        'fecha_fin',
        'reglamento_url',
        'notas',
        'created_by',
        'created_at',
        'updated_at',
    ];

    public function tipoCompetencia()
    {
        return $this->belongsTo(TipoCompetencia::class, 'competencia_id');
    }

    public function categoria()
    {
        return $this->belongsTo(Categoria::class, 'categoria_id');
    }

    public function diaJuego()
    {
        return $this->belongsTo(DiaJuego::class, 'dia_juego_id');
    }

    public function rama()
    {
        return $this->belongsTo(Rama::class, 'rama_id');
    }
}
