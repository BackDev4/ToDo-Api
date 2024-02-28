<?php

use App\Http\Controllers\ToDoController;
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

Route::group(['prefix'=>'todo'], function(){
    Route::get('/', [ToDoController::class, 'index']);
    Route::post('/', [ToDoController::class, 'create']);
    Route::get('/{id}', [ToDoController::class, 'show']);
    Route::post('/{id}', [ToDoController::class, 'update']);
    Route::delete('/{id}', [ToDoController::class, 'delete']);
});