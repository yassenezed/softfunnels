<?php

namespace App\Http\Controllers\Blocks;

use App\Http\Controllers\Controller;
use App\Models\Block;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class IconPlusTextController extends Controller
{
   
    public function store(Request $request, $id)
    {
        // dd($request->all());
        $request->validate([
            // 'details.*.img' => 'required',
            'details.*.text' => 'required',
            'details.*.q' => 'required',
        ], [
            // 'details.*.img' => 'Img is required',
            'details.*.q' => 'Content field is required',
            'details.*.text' => 'Title field is required'
        ]);
        $block = Block::findOrFail($id);
        $details = [];
        // $images_path = collect();


        foreach ($request->input('details') as $index => $detail) {
            $text = $detail['text'];
            $q = $detail['q'];
            $imagePath = null;
        
            if (isset($request->file('details')[$index]['img'])) {
                $image = $request->file('details')[$index]['img'];
                $path = 'iconplustext/'.$id;
                $name = time() . '_' . Str::random(10) . '.' . $image->getClientOriginalExtension();
                $imagePath = $image->storeAs($path, $name, 'public');
            } elseif (isset(json_decode($block->details)[$index]->img)) {
                $imagePath = json_decode($block->details)[$index]->img;
            }
        
            $details[] = [
                'text' => $text,
                'q' => $q,
                'img' => $imagePath
            ];
        }
        
        
        
        // store the details as a JSON string in your database
        $block->details = json_encode($details);
        // dd($block->details);
        $block->save();
            
    

        return redirect()->back();

        // store $detailsJson in your database

    
    }
    public function removeimagedetails(Request $request, $id)
    {
        $image_id = $request->get("image_id");
        // dd($image_id);

        // find Block
        $block = Block::findOrFail($id);

        // convert image String to Array collection
        $images = collect(json_decode($block->details));
        // dd($images);

        // check if image index exists
        if (!isset($images[$image_id])) return abort(404);

        $image = $images[$image_id];
        $image['img'] = '';
        // remove from server
        if (Storage::disk('public')->exists($image)) {
            Storage::disk('public')->delete($image);
        }
        // remove Image from block row 
        $images->splice($image_id, 1);
        
        dd($images);

        // update to database
        $block->details = json_encode($images);
        $block->save();

        return 'success';
    }

    
}
