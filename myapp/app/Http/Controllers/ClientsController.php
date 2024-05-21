<?php

namespace App\Http\Controllers;

use App\Models\Clients;
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
        return view('Layout.Dashboard.index');
    }
    public function calendar(){
        return view('Layout.Dashboard.calendar');
    }
    public function blank(){
        return view('Layout.Dashboard.blank');
    }
    public function tables(){
        return view('Layout.Dashboard.tables');
    }
    public function forms(){
        return view('Layout.Dashboard.forms');
    }
    public function tabs(){
        return view('Layout.Dashboard.tabs');
    }
}

