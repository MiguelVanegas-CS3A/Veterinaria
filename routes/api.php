<?php

use App\Http\Controllers\API\ComidaController;
use App\Http\Controllers\API\MascotaController;
use App\Http\Controllers\API\PropietarioController;
use App\Models\Comida;
use App\Models\Mascota;
use App\Models\Propietario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('comida', [ComidaController::class, 'index']);
Route::get('propietario', [PropietarioController::class, 'index']);
Route::get('mascota', [MascotaController::class, 'index']);


Route::post('comida', [ComidaController::class, 'store']);
Route::get('comida/{comida}', [ComidaController::class, 'show']);
Route::put('comida/{comida}', [ComidaController::class, 'update']);
Route::delete('comida/{comida}', [ComidaController::class, 'destroy']);
Route::post('mascota', [MascotaController::class, 'store']);
Route::get('mascota/{mascota}', [MascotaController::class, 'show']);
Route::put('mascota/{mascota}', [MascotaController::class, 'update']);
Route::delete('mascota/{mascota}', [MascotaController::class, 'destroy']);
Route::post('propietario', [PropietarioController::class, 'store']);
Route::get('propietario/{propietario}', [PropietarioController::class, 'show']);
Route::put('propietario/{propietario}', [PropietarioController::class, 'update']);
Route::delete('propietario/{propietario}', [PropietarioController::class, 'destroy']);
