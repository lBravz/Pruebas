<?php

namespace App\Http\Controllers;

use App\Models\Propiedades;
use Illuminate\Http\Request;

class AdminPropiedadesController extends Controller
{
    public function index()
    {
        $propiedades = Propiedades::all();
        return view('Admin.Propiedades.index', compact('propiedades'));
    }

    public function create()
    {
        return view('Admin.Propiedades.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre_departamento' => 'required|string|max:100',
            'nombre_provincia' => 'required|string|max:100',
            'nombre_distrito' => 'required|string|max:100',
            'tipo' => 'required|string|max:100',
            'titulo' => 'required|string|max:255',
            'descripcion' => 'required|string',
            'area_total' => ['required', 'numeric', 'regex:/^\d+(\.\d{1,2})?$/'],
            'num_baños' => 'required|integer',
            'num_dormitorios' => 'required|integer'
        ]);

        Propiedades::create($request->all());
        return redirect()->route('Admin.propiedades')->with('success', 'Propiedad creada con éxito.');
    }

    public function edit($id)
    {
        $propiedad = Propiedades::findOrFail($id);
        return view('Admin.Propiedades.edit', compact('propiedad'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nombre_departamento' => 'required|string|max:100',
            'nombre_provincia' => 'required|string|max:100',
            'nombre_distrito' => 'required|string|max:100',
            'tipo' => 'required|string|max:100',
            'titulo' => 'required|string|max:255',
            'descripcion' => 'required|string',
            'area_total' => ['required', 'numeric', 'regex:/^\d+(\.\d{1,2})?$/'],
            'num_baños' => 'required|integer',
            'num_dormitorios' => 'required|integer'
        ]);

        $propiedad = Propiedades::findOrFail($id);
        $propiedad->update($request->all());
        return redirect()->route('Admin.propiedades')->with('success', 'Propiedad actualizada con éxito.');
    }

    public function destroy($id)
    {
        $propiedad = Propiedades::findOrFail($id);
        $propiedad->delete();
        return redirect()->route('Admin.propiedades')->with('success', 'Propiedad eliminada con éxito.');
    }
}