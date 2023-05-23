<?php

namespace App\Http\Controllers\Blocks;

use App\Http\Controllers\Controller;
use App\Models\Block;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class OrderblockController extends Controller
{

    public function updateOrder(Request $request)
     {
        //  dd($request->all());
         $blockId = $request->input('blockId');
         $newIndex = $request->input('newIndex');
         // Update the block's order in the database using the ID and newIndex
            $block = Block::find($blockId);
            $block->ordre = $newIndex;
            $block->save();
     
         return response()->json(['success' => true]);
     }
   


}
