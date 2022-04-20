<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

//Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//    return $request->user();
//}); 

Route::get('usuario','tutorialController@obtenerUsuarios');

Route::get('/reserva/materia','tutorialController@obtenerMaterias');

//Route::get('/reserva/grupos/{id}','tutorialController@getGrupoMateria');

Route::get('/reserva/grupo/{id}','tutorialController@obtenerGrupos');

Route::post('/reserva/create','tutorialController@create');