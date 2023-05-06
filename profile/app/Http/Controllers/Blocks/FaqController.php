<?php

namespace App\Http\Controllers\Blocks;

use App\Http\Controllers\Controller;
use App\Models\Block;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class FaqController extends Controller
{
   
    public function store(Request $request, $id)
    {
        // dd($request->all());

        // Validate the request
        $request->validate([
            'details.*.text' => 'required',
            'details.*.q' => 'required'
        ], [
            'details.*.q' => 'Content field is required',
            'details.*.text' => 'Title field is required'
        ]);
        // dd($request->details);
        $block = Block::findOrFail($id);
        if ($request->details) $block_details = json_encode($request->details); 
        // dd($block_details);
        // $block_decode = json_decode($block_details);
        // dd($block_decode);
        $block->details = $block_details;
        $block->save();
        // dd($block);
        // i need to get the landing page_id and the landing page id ;
        // return back()->withInput()->with('page_id', $request->get('landingpage_id'));
        //will keep at the moment with back;
        return redirect()->back();
    }
    
}
