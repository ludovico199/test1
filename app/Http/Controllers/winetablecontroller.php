<?php

namespace App\Http\Controllers;

use App\Models\winetab;
use Illuminate\Http\Request;

class winetablecontroller extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'type' => 'required|string|max:255',
            'price' => 'required|numeric',
            'year' => 'required|integer',
            'description' => 'required|string',
            'food' => 'required|string',
            'Denom' => 'required|string|max:255',
            'grapes' => 'required|string|max:255',
            'Alcool' => 'required|numeric',
            'Cl' => 'required|numeric',
        ]);

        $image = $request->file('image');
        $imageName = $image->getClientOriginalName();
        $imagePath = $image->storeAs('images/wines', $imageName, 'public');

        winetab::create([
            'title' => $request->title,
            'type' => $request->type,
            'image_path' => $imagePath,
            'image_name' => $imageName,
            'price' => $request->price,
            'year' => $request->year,
            'description' => $request->description,
            'food' => $request->food,
            'Denom' => $request->Denom,
            'grapes' => $request->grapes,
            'Alcool' => $request->Alcool,
            'Cl' => $request->Cl,
        ]);

        return redirect()->back()->with('success', 'Immagine caricata con successo.');
    }

    public function index()
    {
        $winetabs = winetab::orderBy('type')->get();
        return view('wines', compact('winetabs'));
    }

    public function filter($type)
    {
        $winetabs = winetab::where('type', $type)->orderBy('type')->get();
        return view('wines', compact('winetabs'));
    }

    public function show($id)
    {
        $wine = winetab::findOrFail($id);
        return view('wines.show', compact('wine'));
    }
}
