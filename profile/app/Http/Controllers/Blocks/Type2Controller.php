<?php

namespace App\Http\Controllers\Blocks;

use App\Http\Controllers\Controller;
use App\Models\Block;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class Type2Controller extends Controller
{
   
    public function store(Request $request, $id)
    {
        $block = Block::findOrFail($id);
        if ($request->hasFile("images")) 
        {
            $images_path = collect();
            if ($block->images) $images_path = collect(json_decode($block->images));
    
            // dd($images_path->remove(2));
            foreach ($request->file('images') as $image) 
            {
                $path = 'blocks/'.$id;
                $name = time() . '_' . Str::random(10) . '.' . $image->getClientOriginalExtension();
                $images_path->add($image->storeAs($path, $name, 'public'));
            }
                // dd($request->file('images')); // name in the array should be images[]
            $block->images = json_encode($images_path->toArray());
        }
            $block->details = $request->content;
            $block->save();
                // i need to get the landing page_id and the landing page id ;
                // return back()->withInput()->with('page_id', $request->get('landingpage_id'));
        return redirect()->back();//will keep at the moment with back;
    }
    
    public function removeimage(Request $request, $id)
    {
        $image_id = $request->get("image_id");

        // find Block
        $block = Block::findOrFail($id);

        // convert image String to Array collection
        $images = collect(json_decode($block->images));

        // check if image index exists
        if (!isset($images[$image_id])) return abort(404);

        $image = $images[$image_id];
    
        // remove from server
        if (Storage::disk('public')->exists($image)) {
            Storage::disk('public')->delete($image);
        }
        // remove Image from block row 
        $images->splice($image_id, 1);
        
        // update to database
        $block->images = json_encode($images);
        $block->save();

        return 'success';
    }
}
