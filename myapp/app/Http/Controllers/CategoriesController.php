<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    public function categories(){
        $categories = Categories::all();
        return view('Produits.index',[
            'categories' => $categories
        ]);
    }
}
