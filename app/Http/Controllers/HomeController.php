<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        
        $comicBooks = config('comics');

        return view('pages.home', compact('comicBooks'));
    }
}
