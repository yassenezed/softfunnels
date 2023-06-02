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
        if (!session()->has('user_id')) {
            session()->flash('error', 'Vous devez vous connecter!');
            return redirect()->route('signin.index');        
        }
        $user_id = auth()->user()->email;
        $user = User::where('email', $user_id)->first();
        $role = $user->role;
        
        if ($role === 'admin') {
        $landingpages = Landingpage::orderByDesc('id')->paginate(10);
        return view('lps.landingpageslist',compact('landingpages'));
        }

        $user_id = auth()->user()->email;
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
        $id = $request->user_id;


        //Validation des Champs
        $request->validate([
            'titre'=>'required|min:2',
            'description'=>'required|min:2',
            'slug' => 'required|min:2|unique:landingpages',

        ]);
        // dd($request->all());

        // //Insertion des données
        landingpage :: create([
            'titre' => $titre,
            'description' => $description,
            'slug' => $slug,
            'state' => $state,  
            'user_id' => $id
        ]);
        session()->flash('success', 'Data has been saved successfully!');
        return redirect()->route('landingpageslist.index');
        }


    // public function show($id)
    // {
    //     $landingpage = Landingpage::with('blocks')->findOrFail($id);
    //     //in blocks model we added something to show the page in the order of the blocks
    //     $landingpage->visitors += 1;
    //     $landingpage->save();
    //     return view('frontend.landingpage', compact('landingpage'));
    // }
    public function show($slug)
{
      // Get the landing page based on the slug and active state
      $landingpage = Landingpage::where('slug', $slug)
      ->where('state', 'active')
      ->with('blocks')
      ->first();

    if (!$landingpage) {
        // Redirect to a custom error page or handle the case when the landing page is not found
        return view('errors.404');
    }

    // Increment the visitors count
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
            session()->flash('success', 'les modifications ont été bien enregistré!');
            return redirect()->route('thankyou.page', ['name' => $fullname]);
            // ('landingpageslist.index');

        }
        
    
}
