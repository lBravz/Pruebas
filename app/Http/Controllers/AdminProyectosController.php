<?php

namespace App\Http\Controllers;

/* LLamado al modelo */
use App\Models\Proyectos;
use Illuminate\Http\Request;

class AdminProyectosController extends Controller
{
    public function index()
    {
        $proyectos = Proyectos::all();
        return view('Admin.Proyectos.index', compact('proyectos'));
    }

    public function create()
    {
        return view('Admin.Proyectos.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'descripcion' => 'required',
            'estado' => 'required',
            'titulo_estado' => 'required',
        ]);

        Proyectos::create($request->all());
        return redirect()->route('Admin.proyectos')->with('success', 'Proyecto creado con éxito.');
    }

    public function edit($id)
    {
        $proyecto = Proyectos::findOrFail($id);
        return view('Admin.Proyectos.edit', compact('proyecto'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'descripcion' => 'required',
            'estado' => 'required',
            'titulo_estado' => 'required',
        ]);

        $proyecto = Proyectos::findOrFail($id);
        $proyecto->update($request->all());
        return redirect()->route('Admin.proyectos')->with('success', 'Proyecto actualizado con éxito.');
    }

    public function destroy($id)
    {
        $proyecto = Proyectos::findOrFail($id);
        $proyecto->delete();
        return redirect()->route('Admin.proyectos')->with('success', 'Proyecto eliminado con éxito.');
    }
}