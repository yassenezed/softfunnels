<?php

namespace App\Http\Controllers;

use App\Models\Landingpage;
use App\Models\Block;
use Illuminate\Http\Request;

class BlockController extends Controller
{

    //CONTROLLER POUR L'AFFICHAGE DES BLOQUES POUR CHAQUE LANDING PAGE 
    //LES BLOQUES SONT AFFICHES SELON LA LANDING PAGE ID 
    //ON SAIT QUE BEAUCOUP DE BLOCKS ONT UNE SEULE LANDING PAGE
    // LES LANDING PAGES SONT SORTED ASC SELON L'ORDRE l'ordre est generé automatiquement
   
    public function blockslist(Request $request)
    {
        $id = $request->get('page_id');
        $landingpage = Landingpage::findOrFail($id);
        $landingpage_id = $landingpage->id;
        $blocks = Block::where('landingpage_id', $landingpage_id)
        ->orderBy('ordre', 'ASC')
        ->paginate(10);        
        return view('blocks.blockslist',compact('blocks','landingpage'));
    }
    public function ajouterblock(Request $request) { 
        $id = $request->get('page_id');
        $landingpage = Landingpage::findOrFail($id);
        return view('blocks.blocksadd', compact('landingpage'));
    } 
    public function getMaxOrderNumber($landingpage_id)
    {
        return Block::where('landingpage_id', $landingpage_id)->max('ordre');
    }
    public function storeblock(Request $request){ 
        // dd($request->all());
        $titre= $request->titre;
        $type = $request->type;
        $landingpage_id = $request->landingpage_id;
        //Validation des Champs
        $request->validate([
            'titre'=>'required',
            'type'=>'required',
            'landingpage_id'=>'required'
        ]);
        // Get the maximum order number of blocks that belong to the same landing page
        $maxOrderNumber = $this->getMaxOrderNumber($landingpage_id);
        // //Insertion des données
        Block::create([
            'titre'=>$titre,
            'type' => $type,
            'landingpage_id' => $landingpage_id,
            'ordre' => $maxOrderNumber + 1, // increment the maximum order number by 1
        ]);
        session()->flash('success', 'Data has been saved successfully!');
        session(['blockslist.page' => $request->get('page')]);
        return back()->withInput()->with('page_id', $request->get('landingpage_id'));
    }
////////NEW TEST
//     public function create(Request $request, $id)
//     {
//     $landing_page = LandingPage::findOrFail($id);
//     return view('WYSIWYG.edit', compact('landing_page'));
//     }
// public function save(Request $request)
// {
//     $block = new Block;
//     $block->content = $request->input('content');
//     $block->landing_page_id = $request->input('landing_page_id');
//     $block->save();
//     return redirect('/landingpage' . $block->landing_page_id)->with('success', 'Block saved successfully!');
// }
     public function create()
     {
         return view('wysiwyg.edit');
     }

}
