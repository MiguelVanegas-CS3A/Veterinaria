<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\ActualizarPropietarioRequest;
use App\Http\Requests\GuardarPropietarioRequest;
use App\Models\Propietario;
use Illuminate\Http\Request;

class PropietarioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Propietario::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(GuardarPropietarioRequest $request)
    {
        Propietario::create($request->all());
        return response()->json([
            "res" => true,
            "msg" => "Propietario Guardada Correctamente"

        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Propietario $propietario)
    {
        return response()->json([
            "propietario" => $propietario
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ActualizarPropietarioRequest $request, Propietario $propietario)
    {
        $propietario->update($request->all());
        return response()->json([
            "msg" => "Propietario Actualizada correctamente"
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Propietario $propietario)
    {
       $propietario->delete();
       return response()->json([
        "msg" => "Propietario Eliminado correctamente"
    ]);
}
}
