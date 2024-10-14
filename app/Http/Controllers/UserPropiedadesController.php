<?php

namespace App\Http\Controllers;

/* Llamado al Modelo */ 
use App\Models\Propiedades;
use Illuminate\Http\Request;

class UserPropiedadesController extends Controller
{
    public function index()
    {
        $propiedades = Propiedades::all();

        $data = [
            'renderBody' => view('Propiedades/index', compact('propiedades'))
        ];

        return view('Shared/_Layout', $data);
    }
}
