<?php

namespace App\Http\Controllers;

use App\Models\Form;
use App\Models\Landingpage;
use App\Models\User;

use Illuminate\Http\Request;

class landingpageController extends Controller
{
   
    public function landingpageslist()
    {
        // if (!session()->has('user_id')) {
        //     session()->flash('error', 'Vous deveriez se-connecter!');
        //     return redirect()->route('signin.index');        
        // }
        // // $profiles = Profile::all();
        // $landingpages = Landingpage::paginate(10);
        // return view('lps.landingpageslist',compact('landingpages'));
        
        if (!session()->has('user_id')) {
            session()->flash('error', 'Vous devez vous connecter!');
            return redirect()->route('signin.index');        
        }
        $user_id = session()->get('user_id');
        $user = User::where('email', $user_id)->first();
        $landingpages = Landingpage::where('user_id', $user->id)->paginate(10);
        return view('lps.landingpageslist', compact('landingpages'));
    }
    
    public function landingpageajouter(){ 
    return view('lps.landingadd');
    // orderByDesc("created_at")
    } 
    public function storelp(Request $request) { 
        // dd($request->all());
        $titre= $request->titre;
        $description = $request->description;
        $slug = $request->slug;
        $state = $request->state;
        $price = $request->price;
        $id = $request->user_id;


        //Validation des Champs
        $request->validate([
            'titre'=>'required|min:2',
            'description'=>'required|min:2',
            'slug'=>'required|min:2'   ,
            'price'=>'required|min:2'   

        ]);
        // dd($request->all());

        // //Insertion des données
        landingpage :: create([
            'titre' => $titre,
            'description' => $description,
            'slug' => $slug,
            'state' => $state,  
            'price' => $price,
            'user_id' => $id
        ]);
        session()->flash('success', 'Data has been saved successfully!');
        return redirect()->route('landingpageslist.index');
        }


    public function show($id)
    {
        $landingpage = Landingpage::with('blocks')->findOrFail($id);
        $landingpage->visitors += 1;
        $landingpage->save();
        return view('frontend.landingpage', compact('landingpage'));
    }
    public function store(Request $request)
    {
           

            // dd($request->all());
            $landing_page_id= $request->id;
            $fullname = $request->name;
            $email = $request->email;
            $phone = $request->phone;
            $company= $request->company;
            $adress= $request->adress;
            $notes= $request->notes;
            // dd($landing_page_id);
            // //Insertion des données
            Form :: create([
                'landing_page_id' => $landing_page_id,
                'fullname' => $fullname,
                'email' => $email,
                'phone' => $phone,
                'company' => $company,
                'adress' => $adress,
                'notes' => $notes,
            ]);
            session()->flash('success', 'Data has been saved successfully!');
            return redirect()->route('landingpageslist.index');
        }

    
}
