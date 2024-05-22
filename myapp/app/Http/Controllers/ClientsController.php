<?php

namespace App\Http\Controllers;

use App\Models\Clients;
use App\Models\Produits;
use App\Models\User;
use Illuminate\Http\Request;

class ClientsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('Layout.Home');
    }
    public function docs(){
        return view('Layout.docs');
    }
    public function contact(){
        return view('Layout.contact');
    }
    public function dashboard(){
        $user = User::get();
        return view('Layout.Dashboard.index',[
            'user' => $user
        ]);
    }
    public function calendar(){
        return view('Layout.Dashboard.calendar');
    }
    public function blank(){
        return view('Layout.Dashboard.blank');
    }
    public function tables(){
        $user = User::get();
        $produits = Produits::with('Categories')->get();
        return view('Layout.Dashboard.tables',[
            'user' => $user ,
            'produits' => $produits
        ]);
    }
    public function forms(){
        return view('Layout.Dashboard.forms');
    }
    public function tabs(){
        return view('Layout.Dashboard.tabs');
    }
}

