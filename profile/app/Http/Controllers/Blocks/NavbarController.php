<?php

namespace App\Http\Controllers\Blocks;

use App\Http\Controllers\Controller;
use App\Models\Block;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class NavbarController extends Controller
{

    public function view(Request $request, $type, $id, $block)
    {
        $blocks = Block::where('landingpage_id', $block->landingpage_id)->get(['id','titre']);
        return view('blocks.navbar', compact('type','id', 'block', 'blocks'));
    }

    public function store(Request $request, $id)
    {
        // dd($request->all());
        $request->validate([
            // 'details.*.img' => 'required',
            'details.*.header1' => 'required',
            'details.*.header2' => 'required',
            'details.*.header3' => 'required',
            'details.*.header4' => 'required',
            'details.*.idheader1' => 'required',
            'details.*.idheader2' => 'required',
            'details.*.idheader3' => 'required',
            'details.*.idheader4' => 'required',

        ], [
            // 'details.*.img' => 'Img is required',
            'details.*.header1' => 'Content field is required',
            'details.*.header2' => 'Title field is required',
            'details.*.header3' => 'Title field is required',
            'details.*.header4' => 'Title field is required',
            'details.*.idheader1' => 'Content field is required',
            'details.*.idheader2' => 'Title field is required',
            'details.*.idheader3' => 'Title field is required',
            'details.*.idheader4' => 'Title field is required'
        ]);

        $block = Block::findOrFail($id);
        $details = [];
        // $images_path = collect();


        foreach ($request->input('details') as $index => $detail) {
            $header1 = $detail['header1'];
            $header2 = $detail['header2'];
            $header3 = $detail['header3'];
            $header4 = $detail['header4'];
            $idheader1 = $detail['idheader1'];
            $idheader2 = $detail['idheader2'];
            $idheader3 = $detail['idheader3'];
            $idheader4 = $detail['idheader4'];
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
                'header1' => $header1,
                'header2' => $header2,
                'header3' => $header3,
                'header4' => $header4,
                'idheader1' => $idheader1,
                'idheader2' => $idheader2,
                'idheader3' => $idheader3,
                'idheader4' => $idheader4,
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
        $detail_id = $request->get("image_id");

        // find Block
        $block = Block::findOrFail($id);

        // convert image String to Array collection
        $details = collect(json_decode($block->details));

        // check if detail index exists
        if (!isset($details[$detail_id])) return abort(404);

        // $detail_id = 0
        // $details = [ [ 'text' => '', 'q' => '', 'img' => '' ], [ 'text' => '', 'q' => '', 'img' => '' ], [ 'text' => '', 'q' => '', 'img' => '' ] ]
        // $details[$detail_id] = [ 'text' => 'dsfsdf s', 'q' => 'fsdfs fsd f', 'img' => 'sdfsdf.png' ]

        // remove image from server
        if (Storage::disk('public')->exists($details[$detail_id]->img)) {
            Storage::disk('public')->delete($details[$detail_id]->img);
        }

        // $details[$detail_id] = [ 'text' => 'dsfsdf s', 'q' => 'fsdfs fsd f', 'img' => '' ]

        // remove Image from block row
        $details[$detail_id]->img = '';

        // update to database
        $block->details = json_encode($details);
        $block->save();

        return 'success';
    }


}
