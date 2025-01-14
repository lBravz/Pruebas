<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Asesores extends Model
{
    use HasFactory;

    protected $table = 'asesores';

    protected $fillable = [
        'nombre_asesor', 'correo_asesor',
    ];
}
