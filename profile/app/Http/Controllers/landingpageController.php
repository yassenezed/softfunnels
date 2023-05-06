<?php

namespace App\Http\Controllers;
use App\Models\Landingpage;
use Illuminate\Http\Request;

class landingpageController extends Controller
{
   
    public function landingpageslist()
    {
        // $profiles = Profile::all();
        $landingpages = Landingpage::paginate(10);
        return view('lps.landingpageslist',compact('landingpages'));
    }
    public function landingpageajouter(){ 
    return view('lps.landingadd');
    
    } 
    public function storelp(Request $request) { 
        // dd($request->all());
        $titre= $request->titre;
        $description = $request->description;
        $slug = $request->slug;
        $state = $request->state;
        //Validation des Champs
        $request->validate([
            'titre'=>'required|min:2',
            'description'=>'required|min:2',
            'slug'=>'required|min:2'   
        ]);
        // //Insertion des données
        landingpage :: create([
            'titre' => $titre,
            'description' => $description,
            'slug' => $slug,
            'state' => $state

        ]);
        session()->flash('success', 'Data has been saved successfully!');
        return redirect()->route('landingpageslist.index');
    }


    public function show($id)
    {
        $landingpage = Landingpage::with('blocks')->findOrFail($id);
        return view('frontend.landingpage', compact('landingpage'));
    }

    
}
