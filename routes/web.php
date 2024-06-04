<?php
use illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\BarangController;

Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login'])->name('login.post');
Route::post('logout', [LoginController::class, 'logout'])->name('logout');


Route::get('/barangs', [BarangController::class, 'index'])->name('barangs.index');
Route::get('/barangs/create', [BarangController::class, 'create'])->name('barangs.create');
Route::post('/barangs', [BarangController::class, 'store'])->name('barangs.store');
Route::get('/barangs/{id}/edit', [BarangController::class, 'edit'])->name('barangs.edit');
Route::put('/barangs/{id}', [BarangController::class, 'update'])->name('barangs.update');
Route::delete('/barangs/{id}', [BarangController::class, 'destroy'])->name('barangs.destroy');


Route::get('/home', function () {
    return view('home');
})->name('home');

