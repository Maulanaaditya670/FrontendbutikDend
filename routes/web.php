<?php
use illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\BarangController;

Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login'])->name('login.post');

Route::get('/homep', function () {
    return view('homep');
});

// routes/web.php
Route::get('/profile', function () {
    return view('profile');
});

Route::get('/list-produk', function () {
    return view('list-produk');
});

Route::get('/barangs', [BarangController::class, 'index'])->name('barang.index');
Route::get('/barangs/create', [BarangController::class, 'create'])->middleware('auth.api')->name('barang.create');
Route::post('/barangs', [BarangController::class, 'store'])->middleware('auth.api')->name('barang.store');
Route::get('/barangs/{id}/edit', [BarangController::class, 'edit'])->middleware('auth.api')->name('barang.edit');
Route::put('/barangs/{id}', [BarangController::class, 'update'])->middleware('auth.api')->name('barang.update');
Route::delete('/barangs/{id}', [BarangController::class, 'destroy'])->middleware('auth.api')->name('barang.destroy');


Route::get('/home', function () {
    return view('home');
})->name('home');

