<?php

use App\Http\Controllers\AuthorController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\ProfileController;
use App\Models\Author;
use App\Models\Book;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Validator;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('store', [
        'books' => Book::with('author')->paginate(15),
    ]);
});

Route::get('/dashboard', function () {
    return view('dashboard.index', [
        'authors' => Author::all()
    ]);
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/store', function () {
    return view('store', [
        'books' => Book::with('author')->paginate(15),
    ]);
})->name('store');

Route::get('/library', function () {
    return view('library', [
        'books' => Book::with('author')->paginate(15)
    ]);
})->name('library');

Route::resource('/authors', AuthorController::class)->only(['index', 'store']);
Route::get('/authors/{id}', function (string $id) {
    $validator = Validator::make(['id' => $id], [
        'id' => ['required', 'exists:authors,id']
    ]);
    if ($validator->fails()) {
        return response()->json($validator->errors(), 400);
    }
    return view('author')->with([
        'author' => Author::with('books')->where('id', (int)$id)->first(),
    ]);
})->where(['id' => '[0-9]+']);

Route::resource('/books', BookController::class)
    ->only(['index', 'store']);

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
