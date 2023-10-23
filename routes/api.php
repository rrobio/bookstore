<?php

use App\Http\Controllers\Api\BookController;
use App\Models\Author;
use App\Models\Book;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Validator;

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

Route::get('authors', [\App\Http\Controllers\Api\AuthorController::class, 'getAll']);
Route::get('authors/{author}', [\App\Http\Controllers\Api\AuthorController::class, 'getById'])->where(['id' => '[0-9]+']);

Route::get('books', [BookController::class, 'getAll']);
Route::get('books/{book}', [BookController::class, 'getById'])->where(['book' => '[0-9]+']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
