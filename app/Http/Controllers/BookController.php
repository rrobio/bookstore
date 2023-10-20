<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class BookController extends Controller
{
    //
    public function store(Request $request): RedirectResponse {
        $this->validateWithBag('bookAdd', $request, [
            'title' => ['required', 'max:255'],
            'publication' => ['required'],
            'author_id' => ['required', 'exists:authors,id'],
            'price' => ['required', 'numeric'],
        ]);

        Book::create($request->all());

        return Redirect::route('dashboard')->with('status', 'book-added');
    }
}
