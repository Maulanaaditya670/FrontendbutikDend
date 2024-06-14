<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class BarangController extends Controller
{
    public function index()
    {
        $response = Http::get('http://localhost:8002/api/barangs');
        if ($response->successful()){
            $barangs = $response->json();
            return view ('barangs.index',compact('barangs'));
        } else {
            return view ('barangs.index')->with('error','Gagal mengambil data barang dari API');
        }
    }

    public function create()
    {
        return view('barang.form');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'deskripsi' => 'required',
            'harga' => 'required|numeric',
        ]);

        $response = Http::withToken(session('api_token'))->post('http://api.example.com/barangs', [
            'nama' => $request->nama,
            'deskripsi' => $request->deskripsi,
            'harga' => $request->harga,
        ]);

        return redirect()->route('barang.index');
    }

    public function edit($id)
    {
        $response = Http::get("http://api.example.com/barangs/{$id}");
        $barang = $response->json();
        if (is_array($barang)) {
            $barang = (object)$barang; // Convert array to object
        }
        return view('barang.form', ['barang' => $barang]);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required',
            'deskripsi' => 'required',
            'harga' => 'required|numeric',
        ]);

        $response = Http::withToken(session('api_token'))->put("http://api.example.com/barangs/{$id}", [
            'nama' => $request->nama,
            'deskripsi' => $request->deskripsi,
            'harga' => $request->harga,
        ]);

        return redirect()->route('barang.index');
    }

    public function destroy($id)
    {
        $response = Http::withToken(session('api_token'))->delete("http://api.example.com/barangs/{$id}");

        return redirect()->route('barang.index');
    }
}
