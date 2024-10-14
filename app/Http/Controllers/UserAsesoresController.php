<?php

namespace App\Http\Controllers;

/* Llamado al Modelo */ 
use App\Models\Asesores;
use Illuminate\Http\Request;

class UserAsesoresController extends Controller
{
    public function index()
    {
        $asesores = Asesores::all();

        $data = [
            'renderBody' => view('Asesores/index', compact('asesores'))
        ];

        return view('Shared/_Layout', $data);
    }
}
