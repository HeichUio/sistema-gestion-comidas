<?php

namespace App\Http\Controllers;

use App\Models\Comida;
use App\Models\TipoComida;
use Illuminate\Http\Request;

class ComidaController extends Controller
{
    public function index()
    {
        $comidas = Comida::with('tipoComida')->get();
        return view('comidas.index', compact('comidas'));
    }

    public function create()
    {
        $tipos = TipoComida::all();
        return view('comidas.create', compact('tipos'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre_comida' => 'required',
            'costo' => 'required|numeric',
            'detalle_comida' => 'required',
            'id_tipo_comida' => 'required'
        ]);

        Comida::create($request->all());

        return redirect()->route('comidas.index')
            ->with('success', 'Comida registrada correctamente');
    }

    public function edit(Comida $comida)
    {
        $tipos = TipoComida::all();
        return view('comidas.edit', compact('comida', 'tipos'));
    }

    public function update(Request $request, Comida $comida)
    {
        $request->validate([
            'nombre_comida' => 'required',
            'costo' => 'required|numeric',
            'detalle_comida' => 'required',
            'id_tipo_comida' => 'required'
        ]);

        $comida->update($request->all());

        return redirect()->route('comidas.index')
            ->with('success', 'Comida actualizada correctamente');
    }

    public function destroy(Comida $comida)
    {
        $comida->delete();

        return redirect()->route('comidas.index')
            ->with('success', 'Comida eliminada correctamente');
    }
}