<?php

namespace App\Http\Controllers;

use App\Models\Proyectos;
use Illuminate\Http\Request;

class UserProyectosController extends Controller
{
    public function index()
    {
        $proyectos = Proyectos::all();

        $data = [
            'renderBody' => view('Proyectos/index', compact('proyectos'))
        ];

        return view('Shared/_Layout', $data);
    }
}
