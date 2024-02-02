<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;

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
    return view('add');
})->name('add');


Route::post('/books', [BookController::class, 'store'])->name('store');
Route::get('/home', function(){return view('home');})->name('home');
Route::get('/library', function(){return view('library');})->name('library');
Route::get('/allbooks', [BookController::class, 'show'])->name('afficher');
Route::delete('/delete/{id}',[BookController::class,'delete'])->name('delete');
Route::put('/update/{id}', [BookController::class, 'update'])->name('update');
Route::post('/reserve/{id}', [ReservationController::class, 'reserve'])->name('reserver');

Route::fallback(function () {
    return view('404');
})->name('404');
