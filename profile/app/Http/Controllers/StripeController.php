<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\PackUser;
use Carbon\Carbon;
use Illuminate\Http\Request;
use PHPUnit\Framework\TestStatus\Success;
use Stripe\StripeClient;
use App\UserPacking;

class StripeController extends Controller
{
    public function checkout(Request $request)
    {
        $userId = $request->query('userId');
        $price = $request->query('price');
        $price_com = $request->query('price');
        $type = $request->query('type');
        $id_pack = $request->query('id_pack');
        $quantity = $request->query('quantity');

        // dd($price_com);
        // dd($price);
        $stripe = new StripeClient(env('STRIPE_SECRET'));

        // Create a new product in Stripe
        $product = $stripe->products->create([
        'name' => $type, // Replace with your product name
        'type' => 'service', // Replace with the appropriate product type
    ]);

    // Create a new price for the product with the provided price
    $price = $stripe->prices->create([
        'unit_amount' => $price * 100, // Convert price to the smallest currency unit (e.g., cents)
        'currency' => 'MAD', // Replace with your desired currency
        'product' => $product->id,
    ]);

    // Create the checkout session with the price ID
    $session = $stripe->checkout->sessions->create([
        // 'success_url' => 'https://your-website.com/success', // Replace with your success URL
        'success_url' => route('stripe.success', ['userId' => $userId,'id_pack' => $id_pack ,'price_com' => $price_com,'quantity' => $quantity]),
        'cancel_url' => route('backadmin.dashboard'), // Replace with your cancel URL
        'payment_method_types' => ['card'],
        'mode' => 'payment', // Specify the mode as 'payment'
        'line_items' => [
            [
                'price' => $price->id, // Use the dynamically created price ID
                'quantity' => 1,
            ],
        ],
    ]);

    return redirect()->to($session->url);
}
public function success (Request $request)
{

    $userId = $request->query('userId');
    $packId =$request->query('id_pack');
    $price_com =$request->query('price_com');
    $quantity =$request->query('quantity');
    $total=$price_com*$quantity;
    // dd($price_com);
    $startDate = \Carbon\Carbon::now();
    $endDate = $startDate->copy()->addMonth();
    // dd($userId);
    \App\Models\UserPacking::create([
        'user_id' => $userId,
        'pack_id' => $packId,
        'start_date' => $startDate,
        'end_date' => $endDate,
    ]);

    \App\Models\Commande::create([
        'user_id' => $userId,
        'pack_id' => $packId,
        'quantity' => $quantity,
        'price' => $price_com,
        'total' => $total,

    ]);


    // $user = User::find($userId);
    // dd($user->id);
    // auth()->login($user);
    return redirect()->route('signinn.index');

}


public function renew(Request $request)
    {
        
        $userId = $request->query('user_id');
        // dd($userId);
        $price = $request->query('price');
        $price_com = $request->query('price');
        $type = $request->query('type');
        $id_pack = $request->query('id_pack');
        $quantity = $request->query('quantity');

        // dd($price_com);
        // dd($price);
        $stripe = new StripeClient(env('STRIPE_SECRET'));

        // Create a new product in Stripe
        $product = $stripe->products->create([
        'name' => $type, // Replace with your product name
        'type' => 'service', // Replace with the appropriate product type
    ]);

    // Create a new price for the product with the provided price
    $price = $stripe->prices->create([
        'unit_amount' => $price * 100, // Convert price to the smallest currency unit (e.g., cents)
        'currency' => 'MAD', // Replace with your desired currency
        'product' => $product->id,
    ]);

    // Create the checkout session with the price ID
    $session = $stripe->checkout->sessions->create([
        // 'success_url' => 'https://your-website.com/success', // Replace with your success URL
        'success_url' => route('renew.stripe', ['userId' => $userId,'id_pack' => $id_pack ,'price_com' => $price_com,'quantity' => $quantity]),
        'cancel_url' => route('backadmin.dashboard'), // Replace with your cancel URL
        'payment_method_types' => ['card'],
        'mode' => 'payment', // Specify the mode as 'payment'
        'line_items' => [
            [
                'price' => $price->id, // Use the dynamically created price ID
                'quantity' => 1,
            ],
        ],
    ]);

    return redirect()->to($session->url);
}



public function renewstripe(Request $request)
{
    // dd('hello');
    // $userId = $request->query('userId');

    // // dd($userId);
    // $packId =$request->query('id_pack');
    // $price_com =$request->query('price_com');
    // $quantity =$request->query('quantity');
    // $total=$price_com*$quantity;
    // // dd($price_com);
    // $startDate = \Carbon\Carbon::now();
    // $endDate = $startDate->copy()->addMonth();
    // // dd($userId);
    // $userPacking = \App\Models\UserPacking::where('user_id', $userId)->first();
    // // dd($userPacking->end_date);
    // if ($userPacking) {
    //     $userPacking->end_date = \Carbon\Carbon::now()->addMonth();
    //     $userPacking->save();
    // }


    // \App\Models\Commande::create([
    //     'user_id' => $userId,
    //     'pack_id' => $packId,
    //     'quantity' => $quantity,
    //     'price' => $price_com,
    //     'total' => $total,

    // ]);


    // // $user = User::find($userId);
    // // dd($user->id);
    // // auth()->login($user);
    // return redirect()->route('backadmin.dashboard');
    $userId = $request->query('userId');
    $packId =$request->query('id_pack');
    $price_com =$request->query('price_com');
    $quantity =$request->query('quantity');
    $total=$price_com*$quantity;
    // dd($price_com);
    $startDate = \Carbon\Carbon::now();
    $endDate = $startDate->copy()->addMonth();
    // dd($userId);
    \App\Models\UserPacking::create([
        'user_id' => $userId,
        'pack_id' => $packId,
        'start_date' => $startDate,
        'end_date' => $endDate,
    ]);

    \App\Models\Commande::create([
        'user_id' => $userId,
        'pack_id' => $packId,
        'quantity' => $quantity,
        'price' => $price_com,
        'total' => $total,

    ]);


    // $user = User::find($userId);
    // dd($user->id);
    // auth()->login($user);
    return redirect()->route('backadmin.dashboard');

}



public function renouveller(Request $request)
{

    return view('subscription.renew');


}


}