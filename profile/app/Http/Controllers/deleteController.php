<?php

namespace App\Http\Controllers;
use App\Models\Landingpage;
use App\Models\Block;

class deleteController extends Controller
{
    public function destroy(Landingpage $landingpages)
    {
        $landingpages->delete();   
        session()->flash('success', 'Landing Page has been sucessfully deleted!');
        return back();
    }
    public function destroyblock(Block $blocks)
    {
        $blocks->delete();   
        session()->flash('success', 'Block has been sucessfully deleted!');
        return back();
    }
}
