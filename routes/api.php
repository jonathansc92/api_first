<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\CategoryController;
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

Route::group(['prefix' => 'books'], function () use ($router) {
    $router->get('/', [BookController::class, 'index']);
    $router->get('/{id}', [BookController::class, 'find']);
    $router->post('/', [BookController::class, 'create']);
    $router->put('/{id}', [BookController::class, 'update']);
    $router->delete('/{id}', [BookController::class, 'delete']);
});

Route::group(['prefix' => 'authors'], function () use ($router) {
    $router->get('/', [AuthorController::class, 'index']);
    $router->get('/{id}', [AuthorController::class, 'find']);
    $router->post('/', [AuthorController::class, 'create']);
    $router->put('/{id}', [AuthorController::class, 'update']);
    $router->delete('/{id}', [AuthorController::class, 'delete']);
});

Route::group(['prefix' => 'categories'], function () use ($router) {
    $router->get('/', [CategoryController::class, 'index']);
    $router->get('/{id}', [CategoryController::class, 'find']);
    $router->post('/', [CategoryController::class, 'create']);
    $router->put('/{id}', [CategoryController::class, 'update']);
    $router->delete('/{id}', [CategoryController::class, 'delete']);
});