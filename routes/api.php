<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\AuthorController;

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
Route::resource('book', BookController::class)->except('edit', 'create');

// Route::get('/author', [AuthorController::class, 'index']);
// Route::post('/author', [AuthorController::class, 'store']);
// Route::get('/author/{id}', [AuthorController::class, 'show']);
// Route::put('/author/{id}', [AuthorController::class, 'update']);
// Route::delete('/author/{id}', [AuthorController::class, 'destroy']);
Route::resource('author', AuthorController::class)->except('edit', 'create');