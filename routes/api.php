<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\UserController;


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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/books/all', [BookController::class, 'index']);

Route::post('/books/create', [BookController::class, 'create']);

Route::post ('/books/update/{id}', [BookController::class, 'update']);

Route::post('/books/delete/{id}', [BookController::class, 'delete']);

Route::get('/user/all', [UserController::class, 'index']);

Route::post('/user/create', [UserController::class, 'create']);

Route::post ('/user/update/{id}', [UserController::class, 'update']);

Route::post('/user/delete/{id}', [UserController::class, 'delete']);