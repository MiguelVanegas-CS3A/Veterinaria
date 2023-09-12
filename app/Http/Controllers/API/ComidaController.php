<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\ActualizarComidaRequest;
use App\Http\Requests\GuardarComidaRequest;
use App\Models\Comida;
use Illuminate\Http\Request;

class ComidaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Comida::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(GuardarComidaRequest $request)
    {
        Comida::create($request->all());
        return response()->json([
            "msg" => "Comida Guardada Correctamente"

        ]);
    }

    /**
     * 
     * Display the specified resource.
     */
    public function show(Comida $comida)
    {
        return response()->json([
            "comida" => $comida
        
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ActualizarComidaRequest $request, Comida $comida)
    {
        $comida->update($request->all());
        return response()->json([
            "msg" => "Comida Actualizada correctamente"
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Comida $comida)
    {
       $comida->delete();
       return response()->json([
        "msg" => "Comida Eliminado correctamente"
    ]);
}
}
