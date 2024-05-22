<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use App\Models\Produits;
use Illuminate\Http\Request;

class ProduitsController extends Controller
{
    public function index(){
        $produits = Produits::with('categories')->get();
        return view('Produits.index', compact('produits'));
    }
    public function delete($id){
        Produits::findOrFail($id)->delete();
        return redirect()->route('Produits.index')->with('drop','Supression de Produit avec succes');
    }
    public function edit($id){
        $produits = Produits::findOrFail($id);
        return view('Produits.edit',[
            'produits' => $produits
        ]);
    }
    public function update(Request $request ,$id){
        $field = $request->validate([
            'name' => 'nullable',
            'image' => 'image|nullable',
            'description' => 'nullable',
            'prix' => 'nullable|numeric',
            'quantite' => 'nullable|numerci',
            'categories_id' => 'nullable'
        ]);
        if($request->hasFile('image')){
            $field['image'] = $request->file('image')->store('produits','public');
        }
        $produits = Produits::findOrFail($id)->update($field);
        return view('Produits.index',['produits'=>$produits])->with('succes','Modification avec succes');
    }

    public function ajouter(){
        $categories = Categories::all();
        return view('Produits.add',[
            'categories' => $categories
        ]);
    }
    public function store(Request $request){
        $form = $request->validate([
            'name' => 'required',
            'image' => 'image|required',
            'description' => 'required',
            'prix' => 'required|numeric',
            'quantite' => 'required|numeric',
            'categories_id' => 'required'
        ]);
        $form['image'] = $request->file('image')->store('produits','public');
        Produits::create($form);
        return view('Produits.index')->with('add','Ajoutation avec succes');
    }
}
