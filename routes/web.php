<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {

    $comicBooks = config('comics');

    return view('pages.home', compact('comicBooks'));
})->name('home');

// In questa funzione ho creato una varabile index che otterrà il valore dell'index del @foreach passato al click sulla card dei fumetti in SERIES nella HOME
Route::get('/comics/{index}', function($index) {

    $comicBooks = config('comics');

    $currentComic = $comicBooks[$index];

    return view('pages.comics', ['index' => $index], compact('currentComic'));
})->name('comics');
