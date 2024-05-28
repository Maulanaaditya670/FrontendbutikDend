<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('login');
});

use Illuminate\Http\Request;

Route::post('/', function (Request $request) {
    $email = $request->input('email');
    $password = $request->input('password');

    // Validasi sederhana (contoh, ganti sesuai kebutuhan)
    if ($email == 'admin@example.com' && $password == 'password') {
        return "Login successful!";
    } else {
        return "Login failed!";
    }
});
