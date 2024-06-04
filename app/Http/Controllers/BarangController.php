<?php

namespace App\Http\Controllers;
use App\Models\Barangs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class BarangController extends Controller
{
    public function index()
    {
        // Fetch data tanpa autentikasi
        $response = Http::get('http://localhost:8002/api/barangs');
        $barangs = $response->json();

        return view('barangs.index', compact('barangs'));
    }

    public function create()
    {
        return view('barangs.create');
    }


public function store(Request $request)
{
    // Validate the incoming request
    $request->validate([
        'name' => 'required|string|max:255',
        'description' => 'required|string|max:255',
        'price' => 'required|numeric',
        'size' => 'required|string|max:255',
        'image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
    ]);

    // Handle the image upload
    if ($request->hasFile('image')) {
        $imageName = time() . '.' . $request->image->extension();
        $request->image->move(public_path('images'), $imageName);
    } else {
        $imageName = null;
    }

    // Prepare data to send to the API
    $data = [
        'name' => $request->name,
        'description' => $request->description,
        'price' => $request->price,
        'size' => $request->size,
        'image' => $imageName,
    ];

    // Send the data to the API
    $response = Http::post('http://localhost:8002/api/barangs', $data);

    // Check if the request was successful
    if ($response->successful()) {
        // Optionally, you can handle successful response here
        return redirect()->route('barangs.index')->with('success', 'Barang created successfully.');
    } else {
        // Handle the case when the request fails
        return back()->withInput()->withErrors('Failed to create Barang. Please try again.');
    }
}


    public function edit($id)
    {
        $response = Http::get("http://localhost:8002/api/barangs/{$id}");

        if ($response->successful()) {
            $barang = $response->json();
            return view('barangs.edit', compact('barang'));
        }

        return back()->withErrors(['error' => 'Failed to fetch barang details.']);
    }

    public function update(Request $request, $id)
    {
        // Handle file upload
        $multipartData = [];
        foreach ($request->except('image') as $key => $value) {
            $multipartData[] = [
                'name' => $key,
                'contents' => $value,
            ];
        }

        if ($request->hasFile('image')) {
            $multipartData[] = [
                'name' => 'image',
                'contents' => fopen($request->file('image')->getPathname(), 'r'),
                'filename' => $request->file('image')->getClientOriginalName(),
            ];
        }

        $response = Http::asMultipart()->post("http://localhost:8002/api/barangs/{$id}", $multipartData);

        if ($response->successful()) {
            return redirect()->route('barangs.index');
        }

        return back()->withErrors(['error' => 'Failed to update barang.']);
    }

    public function destroy($id)
    {
        $response = Http::delete("http://localhost:8002/api/barangs/{$id}");

        if ($response->successful()) {
            return redirect()->route('barangs.index');
        }

        return back()->withErrors(['error' => 'Failed to delete barang.']);
    }
}
