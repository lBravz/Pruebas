<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contacto;
use App\Mail\Mensaje;
use Illuminate\Support\Facades\Mail;

class ContactanosController extends Controller
{
    public function index()
    {
        $data = [
            'renderBody' => view('Contactanos/index')
        ];

        return view('Shared/_Layout', $data);
    }

    public function enviarOpinion (Request $request) {
        $request->validate([
            'nombre' => 'required',
            'apellidos' => 'required',
            'correo' => 'required|email',
            'celular' => 'required',
            'asunto' => 'required',
            'comentario' => 'required'
        ]);

        //Cliente
        Mail::to($request->correo)->send(new Mensaje($request));

        //Admin
        Mail::to('azanajoaquin@gmail.com')->send(new Mensaje($request, true));

        // Respuesta JSON
        return response()->json(['success' => 'Mensaje enviado, verifique su bandeja de gmail']);
    }
}
