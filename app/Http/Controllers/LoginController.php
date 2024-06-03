<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        // Validasi inputan
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // Logika login menggunakan API eksternal
        $response = Http::post('http://localhost:8002/api/login',[
            'email' => $request->email,
            'password' => $request->password,
        ]);
        if ($response->successful()){
            return redirect()->route('home');
        }
        
        return back()->withErrors([
            'emai' => 'Email Salah',
        ]);
}
}