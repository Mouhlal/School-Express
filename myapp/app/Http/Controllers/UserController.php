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
        $user = User::get();
        $search = request('search');
        if ($search) {
            $user = User::where('name', 'like', "%{$search}%")
            ->orWhere('cin', 'like', "%{$search}%")
            ->get();;
        }
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
    public function modifier($id){
        $my_profile = User::findOrFail($id);
        return view('Users.editProfile',[
            'my_prodile'=>$my_profile
        ]);
    }
    public function saveProfile(Request $request,$id){
        $profile_validateur = $request->validate([
            'image' => 'nullable|image',
            'name' => 'nullable|string',
            'cin' => 'nullable',
            "email" => "email|required|unique:users",
        ]);
        if($request->hasFile('image')){
            $profile_validateur['image'] = $request->file('image')->store('users','public');
        }
        User::findOrFail($id)->update($profile_validateur);
        return redirect()->route('Users.Profile')->with('profile','Profile Updated');
    }
    public function showLoginForm()
    {
        return view('Layout.Login');
    }

    public function login(Request $request)
    {
        $email = $request->email;
        $password = $request->password;
        $credentials = [
            'email' => $email,
            'password' => $password,
        ];

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->route('Produits.index')->with('yes', 'Bienvenue');
        } else {
            return back()->withErrors([
                'email' => 'Email / mot de passe incorrect, veuillez réessayer !',
            ]);
        }
    }
    public function Deconnecter(Request $request){
        Session::flush();
        Auth::logout();
        return redirect()->route('Layout.index')->with('dec','Deconnexion avec succes');
    }

}
