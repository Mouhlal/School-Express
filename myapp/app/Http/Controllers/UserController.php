<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
    public function index(){
        $user = User::paginate(6);
        return view('Users.index',[
            'user' => $user
        ]);
    }
    public function add(){
        return view('Users.add');
    }
    public function store(Request $request){
        $attributes = $request->validate([
            'name' => "string|required",
            "image" => "required|image",
            "cin" =>  "required|unique:users",
            "Date_Début_travail" => 'date|required',
            "salaries" => "numeric|required",
            "email" => "email|required|unique:users",
            "password" => "string|min:4|required"
        ]);
        $attributes['image'] = $request->file('image')->store('users','public');
        $attributes['password'] = Hash::make($request->password);
        User::create($attributes);
        return redirect()->route('Users.index')->with('succes','Ajoutation with succes');
    }

    public function delete($id){
        User::findOrFail($id)->delete();
        return redirect()->route('Users.index')->with('delete','Suppression with succes');
    }

    public function edit($id){
        $users = User::findOrFail($id);
        return view('Users.edit',[
            'users' => $users
        ]);
    }

    public function update(Request $request ,$id){
        $form = $request->validate([
            'image' => 'nullable',
            'name' => 'nullable',
            'cin'=> 'nullable',
            'Date_Début_travail' => 'nullable',
            'email' => 'nullable',
            'salaries' => 'nullable'
        ]);
        if($request->hasFile('image')){
           $form['image']=$request->file('image')->store('users','public');
        }
        User::findOrFail($id)->update($form);
        return redirect()->route('Users.index')->with('update','Modification with succes');
    }
    public function profile($id){
        $profile = User::findOrFail($id);
        return view('Users.Profile',[
            'profile' => $profile
        ]);
    }

    public function connecter(){
        return view('Layout.Login');
    }

    public function login(Request $request){
        $email = $request->email;
        $password = $request->password;
        $form = [
            'email' => $email,
            'password' => $password
        ];
        Hash::make($password);
        if(Auth::attempt($form)){
            $request->session()->regenerate();
            return redirect()->route('Produits.index')->with('yes','Bienvennu');
        }
        else{
            return back()->withErrors([
                'email' => 'email / password incorrect , try again !!'
            ]);
        }
    }
    public function Deconnecter(Request $request){
        Auth::logout();
        Session::flush();
        return redirect()->route('Layout.Home')->with('dec','Deconnexion avec succes');
    }

}
