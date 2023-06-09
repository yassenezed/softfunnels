<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Blocks\NavbarController;
use App\Http\Controllers\Blocks\PackController;
use App\Http\Controllers\Blocks\ReviewsController;
use App\Http\Controllers\Blocks\TrustController;
use App\Http\Controllers\Blocks\Type1Controller;
use App\Http\Controllers\Blocks\Type2Controller;
use App\Http\Controllers\Blocks\CarousselController;
use App\Http\Controllers\Blocks\CtaController;
use App\Http\Controllers\Blocks\FaqController;
use App\Http\Controllers\Blocks\IconPlusTextController;
use App\Http\Controllers\Blocks\VideoController;
use App\Http\Controllers\Blocks\FormController;
use App\Http\Controllers\Blocks\HeroController;
use App\Models\Block;
use App\Models\FormConfig;
use Illuminate\Http\Request;

use function PHPSTORM_META\type;

class BuildBlocks extends Controller
{
  
    public function build(Request $request, $type,$id)
    {
        $block = Block::where([[ "type" , $type] , [ "id" , $id] ])->firstorFail();
        // $form_configs = FormConfig;::where([[ "type" , $type] , [ "id" , $id] ])->firstorFail();

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
        case 'video':
            return view('blocks.video', compact('type','id', 'block'));
        case 'pack':
            return view('blocks.pack', compact('type','id', 'block'));
        case 'trust':
            return view('blocks.trust', compact('type','id', 'block'));
        case 'reviews':
            return view('blocks.reviews', compact('type','id', 'block'));
        case 'form':
            return view('blocks.form', compact('type','id', 'block'));
        case 'navbar':
            return (new NavbarController)->view($request, $type, $id, $block);
        case 'hero':
            return view('blocks.hero', compact('type','id', 'block'));
        case 'cta':
            return (new CtaController)->view($request, $type, $id, $block);
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
            case 'video':
                return (new VideoController)->store($request, $id);
            case 'pack':
                return (new PackController)->store($request, $id);
            case 'trust':
                return (new TrustController)->store($request, $id);
            case 'reviews':
                return (new ReviewsController)->store($request, $id);
            case 'form':
                return (new FormController)->store($request, $id);
            case 'navbar':
                return (new NavbarController)->store($request, $id);
            case 'hero':
                return (new HeroController)->store($request, $id);
            case 'cta':
                return (new CtaController)->store($request, $id);
            // add more cases for other types as needed
            default:
                abort(404);
        }
    }
   

}
