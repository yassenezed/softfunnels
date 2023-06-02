<?php

namespace App\Http\Controllers;

use App\Models\Pack;
use App\Models\User;
use App\Models\UserPacking;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class backadminController extends Controller
{
    public function dashboard(){ 
        // if (!session()->has('user_id')) {
        //     session()->flash('error', 'Vous deveriez se-connecter!');
        //     return redirect()->route('signin.index');        
        // }
        $user = auth()->user();
        if ($user->role === 'admin') {
            return view('backadmin.dashboard');
        }
        // user id pack
        $userPacking = UserPacking::where('user_id', $user->id)->where('active', 1)->first();

        if ($userPacking && $userPacking->end_date <= \Carbon\Carbon::now()) 
        {
            $userPacking->active = false;
            $userPacking->save();
            return redirect()->route('renouveller', ['user_id' => $user->id]);
        }
        // $userPackingg = UserPacking::where('user_id', $user->id)->first();
        // $userPackingg = UserPacking::where('user_id', $user->id)
        // ->where('active', 0)
        // ->latest()
        // ->first();        // id of the pack
        // $idpack=  $userPackingg->pack_id;
        // dd($userPacking->end_date);
        // get the pack infos like name price for stripe checkout
        // $pack = Pack::where('id',$idpack)->first();
        //pack price 
        // $price = $pack->price ;
        // pack name 
        // $name = $pack->name;
        // dd($name);
        elseif (!$userPacking) {
            return redirect()->route('renouveller', ['user_id' => $user->id]);
        }
        else
        {
            return view('backadmin.dashboard');
        }
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
        $user = User :: create([
            'lastname' => $lastname,
            'firstname' => $firstname,
            'email' => $email,
            'password' => $hashedpd,
            'username' => $username,
        ]);
       
        $userId = $user->id;
        

        // check if the user in checkout process
        if (!empty($request->get('price')) && !empty($request->get('id_pack')) ) {
            $price = $request->get('price');
            $type = $request->get('type');
            $id_pack = $request->get('id_pack');
            $quantity = $request->get('quantity');

            // Redirect to the Stripe payment page with the price
            return redirect()->route('stripe.checkout', ['userId' => $userId, 'price' => $price, 'id_pack' => $id_pack , 'type' => $type , 'quantity' => $quantity]);
        }

        //new code
        auth()->login($user);
        
        session()->flash('success', 'Data has been saved successfully!');
        return redirect()->route('backadmin.dashboard');
        // return redirect()->route('signinn.index');
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
        session()->start();
        session()->put('user_id', $login);
      
           $request->session()->regenerate();
           session()->flash('success', 'Vous etes connecté! '.$login.' .');
        //    return view('backadmin.dashboard');




        
           return redirect()->route('backadmin.dashboard');

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
         return to_route('signin.index');
   }
   

   public function check(){

        dd('check');
        

   }
}
