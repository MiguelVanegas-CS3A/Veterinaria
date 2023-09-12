<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\ActualizarMascotaRequest;
use App\Http\Requests\GuardarMascotaRequest;
use App\Models\Mascota;
use Illuminate\Http\Request;

class MascotaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Mascota::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(GuardarMascotaRequest $request)
    {
        Mascota::create($request->all());
        return response()->json([
            "msg" => "Mascota Guardada Correctamente"

        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Mascota $mascota)
    {
        return response()->json([
            "mascota" => $mascota 
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ActualizarMascotaRequest $request, Mascota $mascota)
    {
        $mascota->update($request->all());
        return response()->json([
            "msg" => "Mascota Actualizada correctamente"
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Mascota $mascota)
    {
       $mascota->delete();
       return response()->json([
        "msg" => "Mascota Eliminado correctamente"
    ]);
}
}
