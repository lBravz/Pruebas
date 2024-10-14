<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Propiedades extends Model
{
    use HasFactory;
    protected $table = 'proyectos';

    protected $fillable = [
        'nombre_departamento', 'nombre_provincia', 'nombre_distrito', 'tipo', 'titulo', 'descripcion', 'area_total', 'num_baños', 'num_dormitorios'
    ];
}