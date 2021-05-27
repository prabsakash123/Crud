<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\controllers\ToduController;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('/todu',[ToduController::class,'show']);
Route::get('/todu_delete/{id}',[ToduController::class,'destroy']);
Route::get('/Add_Record',[ToduController::class,'create']);
Route::post('/data_store',[ToduController::class,'store']);
Route::get('/todu_edit/{id}',[ToduController::class,'edit']);
Route::post('/tudo_update/{id}',[ToduController::class,'update'])->name("tudo_update");
