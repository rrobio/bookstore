<?php

namespace App\Http\Controllers;

use App\Http\Requests\AuthorAddRequest;
use App\Models\Author;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class AuthorController extends Controller
{
    //
    public function index()
    {
        return view('authors')->with(['authors' => Author::with('books')->get()]);
    }

    public function store(AuthorAddRequest $request): RedirectResponse
    {

        Author::create(
            $request->validated()
        );

        return Redirect::route('dashboard')->with('status', 'author-added');
    }
    public function getById(Author $author) {
        return view('author')->with([
            'author' => Author::with('books')->where('id', $author->id)->first(),
        ]);
    }
}
