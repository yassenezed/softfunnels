<?php

namespace App\Http\Controllers;

use App\Models\Form;
use App\Models\Landingpage;
use App\Models\User;

use Illuminate\Http\Request;

class CommandesController extends Controller
{
   
    public function show()
    {
        if (!session()->has('user_id')) {
            session()->flash('error', 'Vous deveriez se-connecter!');
            return redirect()->route('signin.index');        
        }
        $user_id = auth()->user()->email;
        $user = User::where('email', $user_id)->first();
        $role = $user->role;

        if ($role === 'admin') {
            $forms = Form::orderByDesc('id')->paginate(10);
            return view('commandes.showcommandes', ['forms' => $forms]);
        }
       
        // Get the landing pages of the user
        $user_id = auth()->user()->email;
        $user = User::where('email', $user_id)->first();
        $landingpages = Landingpage::where('user_id', $user->id)->get();
        
        // Retrieve the forms related to each landing page ID of the user
        $forms = collect();
        foreach ($landingpages as $landingpage) {
        $landingpage_id = $landingpage->id;
        $forms = $forms->merge(Form::where('landing_page_id', $landingpage_id)->get());
        }

        // Sort the forms by ID in descending order
        $forms = $forms->sortByDesc('id');
        
        return view('commandes.showcommandes', ['forms' => $forms]);
        
        
        }
        
}

  
    

    
