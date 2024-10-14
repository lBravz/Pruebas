<?php

namespace App\Http\Controllers;

use App\Models\Proyectos;
use App\Models\Propiedades;
use App\Models\Asesores;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $total_proyectos = Proyectos::count();
        $total_propiedades = Propiedades::count();
        $total_asesores = Asesores::count();

        return view('Admin.inicio', compact('total_proyectos', 'total_propiedades', 'total_asesores'));
    }
}