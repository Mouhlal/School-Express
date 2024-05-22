<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use App\Models\Produits;
use Illuminate\Http\Request;

class ProduitsController extends Controller
{
    public function index()
    {
        $produits = Produits::with('categories')->get();
        return view('Produits.index', compact('produits'));
    }

    public function delete($id)
    {
        Produits::findOrFail($id)->delete();
        return redirect()->route('Produits.index')->with('drop', 'Suppression de Produit avec succès');
    }

    public function edit($id)
    {
        $produits = Produits::findOrFail($id);
        $categories = Categories::all();
        return view('Produits.edit', [
            'produits' => $produits,
            'categories' => $categories
        ]);
    }
    public function update(Request $request, $id)
    {
        $fields = $request->validate([
            'name' => 'nullable|string',
            'image' => 'nullable|image',
            'description' => 'nullable|string',
            'prix' => 'nullable|integer',
            'quantite' => 'nullable|integer',
            'categories_id' => 'nullable|exists:categories,id'
        ]);

        if ($request->hasFile('image')) {
            $fields['image'] = $request->file('image')->store('produits', 'public');
        }

        $produits = Produits::findOrFail($id);
        $produits->update($fields);

        return redirect()->route('Produits.index')->with('success', 'Modification avec succès');
    }


    public function ajouter()
    {
        $categories = Categories::all();
        return view('Produits.add', [
            'categories' => $categories
        ]);
    }

    public function store(Request $request)
    {
        $attributes = $request->validate([
            'name' => 'required|string',
            'image' => 'required|image',
            'description' => 'required|string',
            'prix' => 'required|integer',
            'quantite' => 'required|numeric',
            'categories_id' => 'required|exists:categories,id'
        ]);

        $attributes['image'] = $request->file('image')->store('produits', 'public');

        Produits::create($attributes);

        return redirect()->route('Produits.index')->with('add', 'Ajoutation avec succès');
    }
}
