<?php

namespace App\Http\Controllers;

use App\Models\Kos;
use Illuminate\Http\Request;

class KosController
{
    //
    public function index()
    {
        $kos = Kos::all();

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
        $data = $request->validate([
            'image' => 'nullable|image|max:2048',
            'name' => 'required|string|max:255',
            'address' => 'required',
            'city' => 'required|string|max:255',
            'description' => 'nullable',
            'type' => 'required',
            'price' => 'required',
            'contact_number' => 'nullable',
        ]);
        // Create a new kos instance and save it to the database
        // $data['image'] = $request->file('image')->store('images', 'public');

        Kos::create(
            $data
        );

        return redirect()->route('dashboard')->with('success', 'Kos created successfully.');
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
            'image' => 'nullable|string',
            'name' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'city' => 'required|string|max:255',
            'description' => 'nullable|string',
            'type' => 'required|in:putra,putri,campur',
            'price' => 'required|integer',
            'contact_number' => 'nullable|integer',
        ]);
        $kos->update($data);
        return redirect()->route('dashboard')->with('success', 'Kos updated successfully.');
    }
    public function destroy($id)
    {
        // Logic to delete a kos
        $kos = Kos::findOrFail($id);
        $kos->delete();
        return redirect()->route('dashboard')->with('success', 'Kos deleted successfully.');
    }
}
