<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Viaje extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
        'slug',
        'descripcion_corta',
        'descripcion_larga',
        'imagen',
        'destinos',
        'presupuesto',
        'actividad',
        'meta_title',
        'meta_description',
        'pdf', // 🔹 Nuevo campo agregado
    ];

    protected $casts = [
        'destinos' => 'array', // 🔗 Cast para manejar el JSON como array en Eloquent
    ];
}

