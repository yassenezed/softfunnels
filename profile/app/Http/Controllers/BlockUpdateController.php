<?php

namespace App\Http\Controllers;
use App\Models\Block;

class BlockUpdateController extends Controller
{
   
    public function editblock(Block $blocks)
    {
        return view('blocks.type1editing',compact('blocks'));
    }
       
    // public function update(Request $request, Block $blocks)
    // {
    //     $titre = $request->titre;
    //     $description = $request->description;
    //     $slug = $request->slug;
    //     $state = $request->state;        
    //     $data = [
    //         'titre' => $titre,
    //         'description' => $description,
    //         'slug' => $slug,
    //         'state' => $state,
    //     ];
        
    //     $request->validate([
    //         'description'=>'required|min:2',
    //         'slug'=>'required|min:2' 
    //     ]);
        
    //     $blocks->fill($data)->save();
    //     return redirect()->route('blockslist.index', $blocks->id);
    // }
}
