<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Author;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
    public function getAll() {
       return response()->json(['authors' => Author::all()]);
    }
    public function getById(Author $author) {
       return response()->json($author);
    }
}
