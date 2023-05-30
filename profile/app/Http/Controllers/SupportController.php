<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Message;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class SupportController extends Controller
{
   
    public function show()
    {
        // if (!session()->has('user_id')) {
        //     session()->flash('error', 'Vous devriez vous connecter!');
        //     return redirect()->route('signin.index');        
        // }
        $userEmail = auth()->user()->email;
        $user = User::where('email', $userEmail)->firstOrFail();
        if ($user->role === 'admin') {
            $messages = Message::orderByDesc('id')->paginate(10);
            return view('messages.messages', compact('messages'));
    
        }   
        $messages = Message::where('user_id', $user->id)->orderByDesc('id')->paginate(10);
        
        return view('messages.messages', compact('messages'));
    }
    

    
    public function ajouter()
    {
        if (!session()->has('user_id')) {
            session()->flash('error', 'Vous devriez vous connecter!');
            return redirect()->route('signin.index');        
        }
        $users = DB::table('users')->paginate(10);
        return view('messages.send', ['users' => $users]);
    }
    public function storemessage(Request $request)
    {
    
        //  dd($request->all());
         $user_id= $request->user_id;
         $message= $request->message;
         //Validation des Champs

         $request->validate([
             'message'=>'required|min:2',
         ]);

         // //Insertion des données

         Message :: create([
             'user_id' => $user_id,
             'message' => $message,
         ]);
         session()->flash('success', 'Le message a été bien envoyé!');
        //  dd($request->all());
        $messages = Message::orderBy('id', 'desc')->paginate(10);

        return view('messages.messages', compact('messages'));
    
    }

    public function destroy(Message $message)
{
    $message->delete();   
    session()->flash('success', 'Message a été bien supprimé!');
    return back();
}
    
}

