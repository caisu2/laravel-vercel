<?php

use App\Http\Controllers\InformationController;
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

// $router->get('/informations', 'InformationController@index');
// $router->post('/informations/store', 'InformationController@store');
// $router->delete('/informations/destroy/{id}', 'InformationController@destroy');
// $router->put('/informations/update/{id}', 'InformationController@update');

Route::get('/informations',[InformationController::class,'index']);
Route::get('/informations/store',[InformationController::class,'store']);
Route::get('/informations/destroy/{id}',[InformationController::class,'destroy']);
Route::get('/informations/update/{id}',[InformationController::class,'update']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
