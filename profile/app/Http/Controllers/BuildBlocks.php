<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Blocks\Type1Controller;
use App\Http\Controllers\Blocks\Type2Controller;
use App\Http\Controllers\Blocks\CarousselController;
use App\Http\Controllers\Blocks\FaqController;
use App\Http\Controllers\Blocks\IconPlusTextController;
use App\Models\Block;
use Illuminate\Http\Request;

use function PHPSTORM_META\type;

class BuildBlocks extends Controller
{
  
    public function build($type,$id)
    {
        $block = Block::where([[ "type" , $type] , [ "id" , $id] ])->firstorFail();
    switch ($type) {
        case 'type1':
            return view('blocks.type1', compact('type', 'id', 'block'));
        case 'type2':
            return view('blocks.type2', compact('type','id', 'block'));
        // add more cases for other types as needed
        case 'caroussel':
            return view('blocks.caroussel', compact('type','id', 'block'));
        case 'faq':
            return view('blocks.faq', compact('type','id', 'block'));
        case 'iconplustext':
            return view('blocks.iconplustext', compact('type','id', 'block'));
        // add more cases for other types as needed
        default:
            abort(404);
    }
    }
       
    public function store(Request $request ,$type, $id)
    {
        switch ($type) {
            case 'type1':
                return (new Type1Controller)->store($request, $id);
            case 'type2':
                return (new Type2Controller)->store($request, $id);
            case 'caroussel':
                return (new CarousselController)->store($request, $id);
            case 'faq':
                return (new FaqController)->store($request, $id);
            case 'iconplustext':
                return (new IconPlusTextController)->store($request, $id);
            // add more cases for other types as needed
            default:
                abort(404);
        }
    }

    

}
