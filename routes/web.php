<?php

use App\Http\Controllers\Econtroller;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\Belanjacontroller;
use App\Http\Controllers\RegController;
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
    return redirect('/login');
});

Route::get('/login', [LoginController::class, 'index'])->name('login')-> middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);

Route::get('/register', [RegController::class, 'index'])->middleware('guest');
Route::post('/register', [RegController::class, 'store']);



Route::get('/ecommerce', [Econtroller::class, 'index'])->name('barang.index')->middleware('admin');
Route::get('/ecommerce/create', [Econtroller::class, 'create'])->name('barang.create')->middleware('admin');
Route::post('/ecommerce', [Econtroller::class, 'store'])->name('barang.store')->middleware('admin');
Route::get('/ecommerce/{id}', [Econtroller::class, 'show'])->name('barang.show')->middleware('admin');
Route::get('/ecommerce/{id}/edit', [Econtroller::class, 'edit'])->name('barang.edit')->middleware('admin');
Route::put('/ecommerce/{id}', [Econtroller::class, 'update'])->name('barang.update')->middleware('admin');
Route::delete('/ecommerce/{id}', [Econtroller::class, 'destroy'])->name('barang.destroy')->middleware('admin');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

//User
Route::get('/belanja', [Belanjacontroller::class, 'index'])->name('Users.index')->middleware('auth');

