<?php

use App\Http\Controllers\api\ConsultasController;
use App\Http\Controllers\api\UpdateController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
 Route::get('/test', function () {
     return "Hola Estoy Aqui";
 });
Route::get('test', [ConsultasController::class,'consultar_test']);
//Route::get('buscar-clientes', [ConsultasController::class,'BuscarClientes']);
Route::post('login', [ConsultasController::class,'login']);
// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });
//Route::post('login', [AuthController::class,'login']);

Route::group(['middleware'=>['auth:sanctum']],function()
{
    Route::get('buscar-clientes2', [ConsultasController::class,'BuscarClientes']);
    // Route::get('logout', [AuthController::class,'logout']);
    Route::get('cargar', [ConsultasController::class,'CargarDatos']);
    Route::get('update-consecutivo', [ConsultasController::class,'UpdateConsecutivo']);

    Route::post('update-clientes-entradas', [UpdateController::class,'UpdateClientesEntradas']);
    Route::post('update-equipos', [UpdateController::class,'UpdateEquipos']);
});
