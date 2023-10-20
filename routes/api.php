<?php

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

Route::get('authors', function () {
    return response()->json(['authors' => Author::all()->setHidden(['created_at', 'updated_at'])]);
});

Route::get('authors/{id}', function (string $id) {
    $validator = Validator::make(['id' => $id], [
        'id' => ['required', 'exists:authors,id']
    ]);

    if ($validator->fails()) {
        return response()->json($validator->errors(), 400);
    }

    return response()->json([
        'author' => Author::where('id', (int)$id)->first()->makeHidden(['created_at', 'updated_at'])
    ]);
})->where(['id' => '[0-9]+']);

Route::get('books', function () {
    return response()->json(['books' => Book::all()->setHidden(['created_at', 'updated_at'])]);
});

Route::get('books/{id}', function (string $id) {
    $validator = Validator::make(['id' => $id], [
        'id' => ['required', 'exists:books,id']
    ]);

    if ($validator->fails()) {
        return response()->json($validator->errors(), 400);
    }

    return response()->json([
        'book' => Book::where('id', (int)$id)->first()->makeHidden(['created_at', 'updated_at'])
    ]);
})->where(['id' => '[0-9]+']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
