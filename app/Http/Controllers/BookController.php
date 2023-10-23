<?php

namespace App\Http\Controllers;

use App\Http\Requests\BookAddRequest;
use App\Models\Book;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Redirect;

class BookController extends Controller
{
    //
    public function store(BookAddRequest $request): RedirectResponse
    {
        Book::create($request->validated());

        return Redirect::route('dashboard')->with('status', 'book-added');
    }
}
