<?php

namespace App\Http\Controllers;

use App\Models\Block;
use App\Models\Landingpage;
use Illuminate\Http\Request;

class updateController extends Controller
{
   
    public function edit(Landingpage $landingpages)
    {
        return view('lpedit.edit',compact('landingpages'));
    }
       
    public function update(Request $request, Landingpage $landingpages)
    {
        $titre = $request->titre;
        $description = $request->description;
        $slug = $request->slug;
        $state = $request->state;  
        // $price = $request->price;     
        $type = $request->type;        
   
      
        $data = [
            'titre' => $titre,
            'description' => $description,
            'slug' => $slug,
            'state' => $state,
            // 'price' => $price,
            'type' => $type,
        ];
        
        $request->validate([
            'titre'=>'required|min:2',
            'description'=>'required|min:2',
            'slug'=>'required|min:2' ,
            // 'price'=>'required|min:2' 

        ]);
        
        $landingpages->fill($data)->save();
        return redirect()->route('landingpageslist.index', $landingpages->id);
    }
    public function destroy(Landingpage $landingpages)
    {
        $landingpages->delete();   
        session()->flash('success', 'Landing Page a été bien supprimé!');
        return back();
    }


    
    



}
