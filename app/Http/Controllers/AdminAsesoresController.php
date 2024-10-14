<?php

namespace App\Http\Controllers;

/* Llamado al modelo */
use App\Models\Asesores;
use Illuminate\Http\Request;

class AdminAsesoresController extends Controller
{
    public function index()
    {
        $asesores = Asesores::all();
        return view('Admin.Asesores.index', compact('asesores'));
    }

    public function create()
    {
        return view('Admin.Asesores.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre_asesor' => 'required',
            'correo_asesor' => 'required',
        ]);

        Asesores::create($request->all());
        return redirect()->route('Admin.asesores')->with('success', 'Asesor creado con éxito.');
    }

    public function edit(string $id)
    {
        $asesor = Asesores::findOrFail($id);
        return view('Admin.Asesores.edit', compact('asesor'));
    }

    public function update(Request $request, string $id)
    {
        $request->validate([
            'nombre_asesor' => 'required',
            'correo_asesor' => 'required',
        ]);

        $asesor = Asesores::findOrFail($id);
        $asesor->update($request->all());
        return redirect()->route('Admin.asesores')->with('success', 'Asesor actualizado con éxito.');
    }

    public function destroy(string $id)
    {
        $asesor = Asesores::findOrFail($id);
        $asesor->delete();
        return redirect()->route('Admin.asesores')->with('success', 'Asesor eliminado con éxito.');
    }
}
