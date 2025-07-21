<?php

namespace App\Http\Controllers;

use App\Models\Kos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class KosController
{
    //
    public function index()
    {
        $kos = Kos::all()->sortBy('created_at');

        // Logic to display the list of kos
        return view('admin.dashboard', compact('kos'));
    }
    public function show($id)
    {
        $kos = Kos::findOrFail($id);

        // Logic to display a single kos
        return view('ibukos.form-edit-kos', compact('kos'));
    }
    public function create()
    {
        // Logic to show the form for creating a new kos
        return view('ibukos.form-new-kos');
    }
    public function store(Request $request)
    {
        // Logic to store a new kos
        $request->validate([
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'name' => 'required|string|max:255',
            'address' => 'required',
            'city' => 'required|string|max:255',
            'description' => 'nullable',
            'type' => 'required',
            'price' => 'required',
            'contact_number' => 'nullable',
        ]);

        Kos::create(
            [
                'image' => $request->file('image') ? $request->file('image')->store('images', 'public') : null,
                'name' => $request->input('name'),
                'address' => $request->input('address'),
                'city' => $request->input('city'),
                'description' => $request->input('description'),
                'type' => $request->input('type'),
                'price' => $request->input('price'),
                'contact_number' => $request->input('contact_number'),
            ]
        );

        return redirect()->route('kos.index')->with('success', 'Kos created successfully.');
    }
    public function edit($id)
    {
        $kos = Kos::findOrFail($id);

        // Logic to show the form for editing an existing kos
        return view('ibukos.form-edit-kos', compact('kos'));
    }
    public function update(Request $request, $id)
    {
        // Logic to update an existing kos
        $kos = Kos::findOrFail($id);
        $data = $request->validate([
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'name' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'city' => 'required|string|max:255',
            'description' => 'nullable|string',
            'type' => 'required|string',
            'price' => 'required|integer',
            'contact_number' => 'nullable|integer',
        ]);

        if ($request->hasFile('image')) {
            // Delete old image if exists
            if ($kos->image) {
                Storage::disk('public')->delete('images/' . basename($kos->image));
            }
            // Store new image
            $data['image'] = $request->file('image')->store('images', 'public');
        }

        $kos->update($data);
        return redirect()->route('kos.index')->with('success', 'Kos updated successfully.');
    }
    public function destroy($id)
    {
        // Logic to delete a kos
        $kos = Kos::findOrFail($id);
        // Delete the image if it exists
        if ($kos->image) {
            Storage::disk('public')->delete('images/' . basename($kos->image));
        }
        $kos->delete();
        return redirect()->route('kos.index')->with('success', 'Kos deleted successfully.');
    }
}
