<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proyectos extends Model
{
    use HasFactory;
    protected $table = 'Estados_Proyectos'; 

    protected $fillable = [
       'descripcion', 'estado' , 'titulo_estado'
    ];
}
