<?php

use App\Http\Controllers\CiudadController;
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
Route::get('/consulta1',[CiudadController::class,'consulta1']);
Route::get('/consulta2',[CiudadController::class,'consulta2']);
Route::get('/consulta3',[CiudadController::class,'consulta3']);
Route::get('/consulta4',[CiudadController::class,'consulta4']);
Route::get('/consulta5',[CiudadController::class,'consulta5']);
Route::get('/consultaagrupada1',[CiudadController::class,'consultaAgrupada1']);