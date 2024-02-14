<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\NotificationController;

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
    return view('home');
})->name('home');


Route::post('/books', [BookController::class, 'store'])->name('store');

Route::get('/add', function(){return view('add');})->name('add');

Route::get('/library', function(){return view('library');})->name('library');
Route::get('/library', [BookController::class, 'library'])->name('library');


Route::get('/allbooks', [BookController::class, 'show'])->name('afficher');

Route::delete('/delete/{id}',[BookController::class,'delete'])->name('delete');

Route::put('/update/{id}', [BookController::class, 'update'])->name('update');

Route::get('/books/{id}', [BookController::class, 'showDetails'])->name('book.details');

Route::post('/sign', [AuthController::class, 'register'])->name('register');

Route::get('/signup', [AuthController::class, 'signup'])->name('signup');

Route::post('/signin', [AuthController::class, 'login'])->name('login');

Route::get('/signin', [AuthController::class, 'signin'])->name('signin');

Route::get('/logout', [AuthController::class, 'logout'])->name('logout');


Route::post('/reserve/{id}', [BookController::class, 'reserveBook'])->name('reserve.book');

Route::get('/reservations', [BookController::class, 'reservedBooks'])->name('reservations');

Route::post('/unreserve/{id}', [BookController::class, 'unreserveBook'])->name('unreserve.book');

Route::get('/notification', function(){return view('notification');})->name('notification');
Route::get('/notifications', [NotificationController::class, 'index'])->name('notification');

Route::fallback(function () {
    return view('404');
})->name('404');
