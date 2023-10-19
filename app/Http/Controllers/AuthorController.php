<?php

namespace App\Http\Controllers;

use App\Models\Author;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class AuthorController extends Controller
{
    //
    public function index(){
    }
    public function store(Request $request): RedirectResponse
    {
        $request->validateWithBag('authorAdd', [
            'author_first_name' => ['required'],
            'author_last_name' => ['required'],
        ]);

        Author::create([
            'first_name' => $request->input('author_first_name'),
            'last_name' => $request->input('author_last_name'),
        ]);

        return Redirect::route('dashboard')->with('status', 'author-added');
    }
}
