<?php

namespace App\Http\Controllers;

use App\Models\Author;

class Dashboard extends Controller
{
    public function index() {
        return view('dashboard.index', [
            'authors' => Author::all()
        ]);
    }
}
