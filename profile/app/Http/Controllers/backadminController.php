<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class backadminController extends Controller
{
    public function home(){ 
        return view('backadmin.index');
    }
    public function show(){
        
        return view('backadmin.signup');
    }
    public function store(Request $request)
    { 
        // dd($request->all());
        $username= $request->username;
        $firstname = $request->firstname;
        $lastname = $request->lastname;
        // dd($request->lastname,$request->firstname);
        $password= $request->password;
        $hashedpd = Hash::make($password);
        $email= $request->email;
        //Validation des Champs
        $request->validate([
            'username'=>'required|unique:users|min:2',
            'firstname'=>'required|min:2',
            'lastname'=>'required|min:2',
            'email'=>'required|email|unique:users',
            'password'=>'required|min:9|max:50|confirmed'
        ]);
        // //Insertion des données
        User :: create([
            'lastname' => $lastname,
            'firstname' => $firstname,
            'email' => $email,
            'password' =>$hashedpd,
            'username' => $username,
        ]);
         session()->flash('success', 'Data has been saved successfully!');
         return redirect()->route('home.index');
         

    }
    public function page(){
        return view ('backadmin.signin');
   }
   public function login(Request $request){
    //    dd($request->all());
       $login= $request->email;
       $password = $request->password;
       $credentials = [ 'email' => $login, 'password' => $password];
       if(Auth::attempt($credentials))
       {
           //Connected
           $request->session()->regenerate();
           session()->flash('success', 'Vous etes connecté! '.$login.' .');
           return view('backadmin.index');
       }else{
           //Wrong
           return back()->withErrors([
               'email'=>'Email ou mot de passe incorrect'
           ])->onlyInput('email');
           //or withInput...


       }
   }
   public function logout(){
         Session::flush();
         Auth::logout();
         session()->flash('success', 'Vous etes Deconnecté!');
         return to_route('login.index');
   }
   
}