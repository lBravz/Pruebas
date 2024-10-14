<?php

namespace App\Http\Controllers;

/* Llamado al modelo */
use App\Models\Usuarios;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class AccederController extends Controller
{
    public function index()
    {
        $data = [
            'renderBody' => view('Acceder/index')
        ];

        return view('Shared/_Layout', $data);
    }

    public function register(Request $request)
    {
        $request->validate([
            'usuario' => 'required|string|max:50',
            'correo' => 'required|email|max:100|unique:usuarios',
            'clave' => 'required|string|min:6',
            'aceptar_terminos' => 'accepted',
        ]);

        Usuarios::create([
            'usuario' => $request->input('usuario'),
            'correo' => $request->input('correo'),
            'clave' => Hash::make($request->input('clave')),
            'cargo_id' => 2,
        ]);

        return redirect()->route('acceder')->with('status', 'Registro exitoso. Por favor, inicie sesión.');
    }

    public function login(Request $request)
    {
        $request->validate([
            'correo' => 'required|email',
            'clave' => 'required',
        ]);

        if (Auth::attempt(['correo' => $request->correo, 'password' => $request->clave])) {
            return redirect()->route('Admin.inicio');
        }

        return redirect()->back()->withErrors(['correo' => 'Credenciales incorrectas.']);
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('home')->with('status', 'Has cerrado sesión exitosamente.');
    }

}