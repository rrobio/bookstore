<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Book;

class BookController extends Controller
{
    public function getAll() {
        return response()->json(['books' => Book::all()]);
    }
    public function getById(Book $book) {
        return response()->json($book);
    }
}
