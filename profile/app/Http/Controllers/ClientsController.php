<?php

namespace App\Http\Controllers;

use App\Models\Block;
use App\Models\Client;
use App\Models\Form;
use App\Models\User;
use Illuminate\Http\Request;

class ClientsController extends Controller
{
   
    public function show()
    {
        if (!session()->has('user_id')) {
            session()->flash('error', 'Vous deveriez se-connecter!');
            return redirect()->route('signin.index');        
        }
        $user_id = session()->get('user_id');
        $user = User::where('email', $user_id)->first();
        $role = $user->role;
        // dd($role);

        if ($role === 'admin') {
            $clients = Client::orderByDesc('id')->paginate(10);
            return view('clients.list' , ['clients' => $clients]);
        }
       
        // Get the landing pages of the user
        
        $clients = Client::where('user_id', $user->id)->paginate(10);
        
        // Retrieve the forms related to each landing page ID of the user
       
        return view('clients.list' , ['clients' => $clients]);


    }

    public function add()
    {
        if (!session()->has('user_id')) {
            session()->flash('error', 'Vous deveriez se-connecter!');
            return redirect()->route('signin.index');        
        }
        
        return view('clients.add');


    }


    public function store(Request $request)
    {
        if (!session()->has('user_id')) {
            session()->flash('error', 'Vous deveriez se-connecter!');
            return redirect()->route('signin.index');        
        }
        // dd($request->all());
            $prenom= $request->first_name;
            // dd($prenom);
            $nom = $request->last_name;
            $email = $request->email;
            $phone = $request->phone;
            $company = $request->company;
            $user_id= $request->user_id;
            // Validation des Champs
            $request->validate([
                'first_name'=>'required',
                'last_name'=>'required',
                'email'=>'required',
                'phone'=>'required',

                
            ]);

            // //Insertion des données
            Client::create([
                'first_name'=>$prenom,
                'last_name' => $nom,
                'email' => $email,
                'phone' => $phone,
                'company' => $company,
                'user_id' => $user_id,


            ]);
            session()->flash('success', 'Le nouveau client a été bien ajouté');
            return back();
    }
    public function editclient(Client $clients)
    {
        return view('clients.edit',compact('clients'));
    }
       
    public function updateclient(Request $request, Client $clients)
    {
        // dd($request->all());
        $prenom= $request->first_name;
            // dd($prenom);
            $nom = $request->last_name;
            $email = $request->email;
            $phone = $request->phone;
            $company = $request->company;
            $user_id= $request->user_id;
        $data = [
            'first_name'=>$prenom,
                'last_name' => $nom,
                'email' => $email,
                'phone' => $phone,
                'company' => $company,
                'user_id' => $user_id,

        ];
        
        $request->validate([
            'first_name'=>'required',
            'last_name'=>'required',
            'email'=>'required',
            'phone'=>'required',

            
        ]);
        
        $clients->fill($data)->save();
        return redirect()->route('clients.show', $clients->id);
   
    }
    public function destroyclient(Client $clients)
    {
        $clients->delete();   
        session()->flash('success', 'Le Client a été bien supprimé!');
        return back();
    }
    public function createfromform (Request $request)
    {
        // dd($request->all());
        $fullname = $request->query('fullname');
        $email = $request->query('email');
        $phone = $request->query('phone');
        $company = $request->query('company');
        $address = $request->query('address');
        return view('clients.addfromforms', compact('fullname', 'email', 'phone', 'company'));
    }
    public function showall($id)
    {
        $form = Form::findOrFail($id);
        return view('commandes.viewcommandes', ['form' => $form]);
    }

    public function edit(Form $forms)
    {
        return view('commandes.editcommandes', compact('forms'));
    }
    public function update(Request $request, Form $forms)
    {
        // dd($request->all());
        $fullname = $request->fullname;
        $phone = $request->phone;
        $email = $request->email;
        $adress = $request->adress;  
        $notes = $request->notes; 
        $company = $request->company;
        $state = $request->state;        
       
      
        $data = [
            'fullname' => $fullname,
            'phone' => $phone,
            'email' => $email,
            'adress' => $adress,
            'notes' => $notes,
            'company' => $company,
            'state' => $state,

        ];
        
     
        
        $forms->fill($data)->save();
        return redirect()->route('commandes.show');
    }

    public function deletecommandes(Form $forms)
    {
        $forms->delete();   
        session()->flash('success', 'Le Client a été bien supprimé!');
        return back();
    }

            public function editbloq($id)
            {
            $block = Block::find($id);

            // Assuming you have a view called 'edit.blade.php'
            return view('blocks.modify', compact('block'));
            }
       
            public function updatebloq(Request $request, $id)
            {
                    //  dd($request->all());
                    $block = Block::findOrFail($id);
                  
                    // Validate the form data
                    $request->validate([
                        'titre' => 'required',
                        'ordre' => 'required',
                    ]);
                
                    $block->titre = $request->titre;
                    $block->ordre = $request->ordre;
                    $block->save();
                
                    // Update the block with the validated data

                return redirect()->back()->with('success', 'Block updated successfully');
            }














}