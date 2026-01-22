<?php

namespace App\Http\Controllers;

use App\Models\Prenda;
use Illuminate\Http\Request;

class PrendaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $prendas = Prenda::all();
        return view('prenda.index', compact('prendas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $prendas = Prenda::all();
        return view('prenda.create', compact('prendas'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string',
            'descripcion' => 'required|string',
            'precio' => 'required|numeric'
        ],
        [
            'nombre.required' => 'El nombre es requerido',
            'descripcion.required' => 'La descripción es requerida',
            'precio.required' => 'El precio es requerido',
            'precio.numeric' => 'El precio debe ser numérico'
        ]);

        $prenda = Prenda::create($request->only([
            'nombre',
            'descripcion',
            'precio'
        ]));
        
        return redirect()->route('prenda.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Prenda $prenda)
    {
        $prenda = Prenda::findOrFail($prenda->id);
        return view('prenda.show', compact('prenda'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Prenda $prenda)
    {
        $prenda = Prenda::findOrFail($prenda->id);
        return view('prenda.edit', compact('prenda'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Prenda $prenda)
    {
        $request->validate([
            'nombre' => 'required',
            'descripcion' => 'required',
            'precio' => 'required|numeric'
        ],
        [
            'nombre.required' => 'El nombre es requerido',
            'descripcion.required' => 'La descripción es requerida',
            'precio.required' => 'El precio es requerido',
            'precio.numeric' => 'El precio debe ser numérico'
        ]);

        $prenda = Prenda::findOrFail($prenda->id);
        $prenda->update($request->only([
            'nombre',
            'descripcion',
            'precio'
        ]));

        return redirect()->route('prenda.show', $prenda->id);
    }

    // confirmar eliminar
    public function confirmDelete(Prenda $prenda)
    {
        return view('prenda.confirmDelete', compact('prenda'));
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Prenda $prenda)
    {
        $prenda = Prenda::findOrFail($prenda->id);
        $prenda->delete();
        return redirect()->route('prenda.index');
    }
}
