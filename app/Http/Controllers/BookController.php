<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class BookController extends Controller
{
    //
    public function store(Request $request): RedirectResponse {

        return Redirect::route('dashboard')->with('status', 'book-added');
    }
}
