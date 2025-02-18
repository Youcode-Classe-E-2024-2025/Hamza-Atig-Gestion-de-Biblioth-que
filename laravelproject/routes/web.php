<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BookController;

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
    return view('home');
});

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::get('/register', [AuthController::class, 'showRegisterForm']);
Route::post('/register', [AuthController::class, 'register'])->name('register');

Route::post('/login', [AuthController::class, 'login'])->name('login');

Route::get('/dash', function () {
    return view('dash');
})->name('dash');

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::post('/addbook', [BookController::class, 'store'])->name('addbook');

Route::delete('/removebook/{book}', [BookController::class, 'destroy'])->name('destroy');

Route::put('/books/{book}', [BookController::class, 'update'])->name('books.update');

Route::get('/books/{book}/edit', [BookController::class, 'edit'])->name('books.edit');
