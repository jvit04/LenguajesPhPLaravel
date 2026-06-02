<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Proyecto;
use Illuminate\Support\Facades\DB;

class ProyectosController extends Controller
{
    /**
     * Display a listing of the resource.
     * 
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $proyectos=DB::table('proyectos')->get();
        return view("projects/index",['proyectos'=>$proyectos]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("projects/new");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Proyecto::create($request->all());
        return redirect('projects/')
        ->with('success', 'Proyecto creado satisfactoriamente');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $proyecto=Proyecto::find($id);
        return view("projects/update",compact('proyecto'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'nombre' => 'required|max:255',
            'descripcion' => 'required'
        ]);
        $proyecto = Proyecto::findOrFail($id);
        $proyecto->update($request->only(['nombre', 'descripcion']));

        return redirect()->route('projects.index')
            ->with('success', 'Proyecto actualizado satisfactoriamente.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
