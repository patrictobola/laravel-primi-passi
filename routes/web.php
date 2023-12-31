<?php

use Dflydev\DotAccessData\Data;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    $greet = 'Hello World!';
    return view('home', compact('greet'));
})->name('home');

Route::get('/pagina_random', function () {
    $greet = 'Pagina Random';
    return view('pagina_random', compact('greet'));
})->name('random');


Route::get('/pagina_pricing', function () {
    $greet = 'Pagina Pricing';
    return view('pagina_pricing', compact('greet'));
})->name('pricing');
