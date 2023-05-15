<?php

namespace App\Http\Controllers;

use App\Models\Form;
use App\Models\Landingpage;
use App\Models\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;

class AdminController extends Controller
{
   
    public function showusers()
    {
        if (!session()->has('user_id')) {
            session()->flash('error', 'Vous deveriez se-connecter!');
            return redirect()->route('signin.index');        
        }
            $users = User::orderByDesc('id')->paginate(10);
            return view('users.allusers', ['users' => $users]);

        }
        public function softdelete($id)
        {
            $user = User::find($id);
            $user->delete();   
            session()->flash('success', 'utilisateur a été bien supprimé');
            return back();
        }



        // user update whatever admin or not admin !


        // la page dont y'a le formulaire d'update!

        public function editpage(Request $request)
        {
            $email = $request->session()->get('user_id');
            // dd($email);
            $user = User::where('email', $email)->firstOrFail(); 
            return view('user.edit' , ['user' => $user]);
        }


        // Fonction update
        public function edit(Request $request)
        { 

        // dd($request->all());
        //Retrieve the user record to update
        $email = $request->session()->get('user_id');
        // dd($email);
        $user = User::where('email', $email)->firstOrFail(); 
        // dd($user->id);       
        //Update the user record with the new data
        $username= $request->username;
        $firstname = $request->firstname;
        // dd($firstname);
        $lastname = $request->lastname;
        // dd($user->lastname);
        $email= $request->email;

        //Validate the updated data
        $request->validate([
            'username' => [
                'required',
                'min:2',
                Rule::unique('users', 'username')->ignore($user->id),
            ],
            'email' => [
                'required',
                'email',
                Rule::unique('users', 'email')->ignore($user->id),
            ],
            'firstname' => 'required|min:2',
            'lastname' => 'required|min:2',
        ]);
        
        // dd($firstname);


        $user->email = $email;
        $user->username = $username;
        // dd($user->firstname);
        $user->firstname = $firstname;
        // dd($user->firstname);
        $user->lastname = $lastname;

        //Save the updated user record
        $user->save();
        session()->flash('success', 'Les Modifications ont été bien eregistrées !');
        return redirect()->back();
}

        

        
}

  
    

    
