<?php
use illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\HijabController;
use App\Http\Controllers\KokoController;

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

Route::get('/barangs', [BarangController::class, 'index'])->name('barangs.index');
Route::get('/barangs/create', [BarangController::class, 'create'])->middleware('auth.api')->name('barangs.create');
Route::post('/barangs', [BarangController::class, 'store'])->middleware('auth.api')->name('barangs.store');
Route::get('/barangs/{id}/edit', [BarangController::class, 'edit'])->middleware('auth.api')->name('barangs.edit');
Route::put('/barangs/{id}', [BarangController::class, 'update'])->middleware('auth.api')->name('barangs.update');
Route::delete('/barangs/{id}', [BarangController::class, 'destroy'])->middleware('auth.api')->name('barangs.destroy');

Route::get('/hijabs', [HijabController::class, 'index'])->name('hijabs.index');

Route::get('/kokos', [KokoController::class, 'index'])->name('kokos.index');


Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/homeboard', function () {
    return view('homeboard');
})->name('homeboard');

Route::get('/profile', function () {
    return view('profile');
})->name('profile');

Route::get('/tambahposting', function () {
    return view('tambahposting');
});

Route::get('/listproduk', function () {
    return view('listproduk');
})->name('listproduk');;

Route::get('/homep', function () {
    return view('homep');
})->name('homep');

Route::get('/list-produk', function () {
    return view('list-produk');
})->name('list-produk');;

Route::view('/listgamis', 'listgamis')->name('listgamis');
Route::view('/listkoko', 'listkoko')->name('listkoko');
Route::view('/listhijab', 'listhijab')->name('listhijab');

Route::view('/tambahgamis', 'tambahgamis')->name('tambahgamis');
Route::view('/tambahkoko', 'tambahkoko')->name('tambahkoko');
Route::view('/tambahhijab', 'tambahhijab')->name('tambahhijab');

// routes/web.php
Route::get('/list-produkgamis', function () {
    return view('list-produkgamis');
})->name('list-produkgamis');

Route::get('/listprodukkoko', function () {
    return view('listprodukkoko');
})->name('listprodukkoko');

// routes/web.php
Route::get('/lpkoko', function () {
    return view('lpkoko');
});

// routes/web.php
Route::get('/lpgamis', function () {
    return view('lpgamis');
});

// routes/web.php
Route::get('/lphijab', function () {
    return view('lphijab');
});

