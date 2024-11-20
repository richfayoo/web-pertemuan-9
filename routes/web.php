<?php

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

// Route::get('/', function () {
//     return view('home');
// });


// Tanpa Controller
Route::get('/', function(){
    return view('home'); //lokasi: resources/views
})->name('home');

Route::get('/web/contact', function(){
    return view('contact'); //lokasi: resources/views
})->name('contact');

Route::get('/web/about', function(){
    return view('about'); //lokasi: resources/views
})->name('about');

Route::get('/new', [PageController::class,'home'])->name('home');