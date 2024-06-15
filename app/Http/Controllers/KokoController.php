<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class KokoController extends Controller
{
    public function index()
    {
        // Fetch data without authentication
        $response = Http::get('http://localhost:8002/api/kokos');
        $kokos = $response->json();

        return view('kokos.index', compact('kokos'));
    }

    public function create()
    {
        return view('kokos.create');
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
        $response = Http::post('http://localhost:8002/api/kokos', $data);

        // Check if the request was successful
        if ($response->successful()) {
            return redirect()->route('kokos.index')->with('success', 'Koko created successfully.');
        } else {
            return back()->withInput()->withErrors('Failed to create Koko. Please try again.');
        }
    }

    public function edit($id)
    {
        $response = Http::get("http://localhost:8002/api/kokos/{$id}");

        if ($response->successful()) {
            $koko = $response->json();
            return view('kokos.edit', compact('koko'));
        }

        return back()->withErrors(['error' => 'Failed to fetch koko details.']);
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

        $response = Http::asMultipart()->post("http://localhost:8002/api/kokos/{$id}", $multipartData);

        if ($response->successful()) {
            return redirect()->route('kokos.index');
        }

        return back()->withErrors(['error' => 'Failed to update koko.']);
    }

    public function destroy($id)
    {
        $response = Http::delete("http://localhost:8002/api/kokos/{$id}");

        if ($response->successful()) {
            return redirect()->route('kokos.index');
        }

        return back()->withErrors(['error' => 'Failed to delete koko.']);
    }
}
