<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\backadminController;
use App\Http\Controllers\landingpageController;
use App\Http\Controllers\updateController;
use App\Http\Controllers\deleteController;
use App\Http\Controllers\BlockController;
use App\Http\Controllers\Blocks\Type1Controller;
use App\Http\Controllers\Blocks\Type2Controller;
use App\Http\Controllers\Blocks\CarousselController;
use App\Http\Controllers\Blocks\IconPlusTextController;
use App\Http\Controllers\BuildBlocks;
use App\Http\Controllers\CommandesController;
use App\Http\Controllers\HomePageController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Blocks\OrderblockController;
use App\Http\Controllers\ClientsController;
use App\Http\Controllers\StripeController;
use App\Http\Controllers\SupportController;

Route::middleware([ 'auth' ])->group(function () {
    Route::get('/home', [backadminController::class, 'dashboard'])->name('backadmin.dashboard');   
    // Route::get('/home', [backadminController::class, 'check']);   

    Route::get('/create_block', [BlockController::class, 'create'])->name('create_block.index');

    
    
});
// LP CREATIONS - ADDITION
Route::get('/landingpages', [landingpageController::class,'landingpageslist'])->name('landingpageslist.index');
Route::GET('/landingpages/ajouter', [landingpageController::class,'landingpageajouter'])->name('landingpageajouter.index');
Route::POST('/landingpages/storepage', [landingpageController::class,'storelp'])->name('storelp.index');
// Catch-all route for 404 errors Redirect all 404 Pages To Home
// Route::fallback(function () {
//     return redirect()->route('home');
// });

Route::get('/', function () {
    return view('homepagefront.index');
})->name('home');
// SIGNUP
Route::get('/inscrivez-vous', [backadminController::class,'show'])->name('signupview.index');
Route::POST('/inscrivez-vous/store', [backadminController::class,'store'])->name('signup.index');
//SIGN IN
Route::get('/connectez-vous', [backadminController::class,'page'])->name('signinn.index');
Route::POST('/connectez-vous', [backadminController::class,'login'])->name('signin.index');

//************************************************//



// LP UPDATE
Route::get('/landingpages/{landingpages}/edit', [updateController::class,'edit'])->name('editlp.index');
Route::PUT('/landingpages/{landingpages}', [updateController::class,'update'])->name('updatelp.index');



//DELETE
Route::GET('/landingpages/{landingpages}', [deleteController::class,'destroy'])->name('destroylp.index');


// APPERCU

// Route::get('/page/{id}', [ landingpageController::class,'show'])->name('landingpage.show');


// REDIRECT TO SLUG 
Route::get('/page/{slug}', [LandingPageController::class, 'show'])->name('landingpage.show');


Route::POST('/page/{id}/store', [landingpageController::class,'store'])->name('leads.store');
//THANK YOU PAGE
Route::get('/thankyou/{name}', function ($name) {
    return view('thankyou.page', ['name' => $name]);
})->name('thankyou.page');


// *********************************************** //

Route::group([ 'middleware' => [ 'auth', 'subscribe' ] ] , function () {

    Route::get('zl', function () {
        return "welcome";
    });

});

//BUILD LP WITH BLOCKS
Route::GET('/blocks/ajouterblock', [BlockController::class,'ajouterblock'])->name('ajouterblock.index');
Route::POST('/blocks/storeblock', [BlockController::class,'storeblock'])->name('storeblock.index');
Route::get('/landingpage/blocks', [BlockController::class,'blockslist'])->name('blockslist.index');


//DELETE BLOCKS
Route::get('/blocks/{blocks}', [deleteController::class,'destroyblock'])->name('destroyblock.index');



// Route::get('/landingpage/{id}/create_block', [BlockController::class, 'create'])->name('create_block.index');
// Route::get('/create_block', [BlockController::class, 'create'])->name('create_block.index');

// CREATING BLOCKS
Route::get('/build/{type}/{id}', [BuildBlocks::class, 'build'])->name('build.index');
Route::post('/build/{type}/{id}', [BuildBlocks::class, 'store'])->name('build.store');
Route::post('/removeimage/{id}', [Type1Controller::class,'removeimage'])->name('build.removeimage');
Route::post('/removeimage/{id}', [Type2Controller::class,'removeimage'])->name('build.removeimage');
Route::post('/removeimage/{id}', [CarousselController::class,'removeimage'])->name('build.removeimage');
Route::post('/removeimagedetails/{id}', [IconPlusTextController::class,'removeimagedetails'])->name('build.removeimagedetails');

// HomePage Pages Router
Route::get('/index', [HomePageController::class, 'index'])->name('home.index');
Route::get('/about', [HomePageController::class, 'about'])->name('home.about');
Route::get('/services', [HomePageController::class, 'services'])->name('home.services');
Route::get('/contact', [HomePageController::class, 'contact'])->name('home.contact');





// TABLE COMMANDES AFFICHAGE

Route::get('/commandes', [CommandesController::class,'show'])->name('commandes.show');


// Messaging
Route::get('/support', [SupportController::class,'show'])->name('support.show');
Route::get('/support/ajouter', [SupportController::class,'ajouter'])->name('message.add');
Route::POST('/support/storemessage', [SupportController::class,'storemessage'])->name('message.store');
Route::GET('/support/{message}', [SupportController::class,'destroy'])->name('message.destroy');


//LOGOUT
Route::get('/logout', [backadminController::class,'logout'])->name('logout.index');

// ALL USERS

Route::get('/utilisateurs', [AdminController::class,'showusers'])->name('users.show');
Route::GET('/utilisateurs/{user}', [AdminController::class,'softdelete'])->name('users.softdelete');


/// USER UPDATE INFOS
Route::get('/modifier', [AdminController::class,'editpage'])->name('users.editpage');
Route::POST('/modifier/edit', [AdminController::class,'edit'])->name('users.edit');
// UPDATE THE PASSWORD

Route::get('/modifier-password', [AdminController::class, 'editPasswordPage'])->name('users.password');

Route::post('/modifier-password/edit', [AdminController::class, 'editPassword'])->name('users.newpass');


// AFFICHER LES CLIENTS
Route::get('/clients', [ClientsController::class, 'show'])->name('clients.show');
Route::get('/clients/add', [ClientsController::class, 'add'])->name('clients.add');
Route::POST('/clients/store', [ClientsController::class, 'store'])->name('clients.store');




// Client UPDATE
Route::get('/clients/{clients}/editclient', [ClientsController::class,'editclient'])->name('clients.edit');
Route::PUT('/clients/{clients}', [ClientsController::class,'updateclient'])->name('clients.update');

//DELETE
Route::GET('/clients/{clients}/delete', [ClientsController::class,'destroyclient'])->name('clients.destroy');


// ADD FROM FORMS
Route::get('/clients/create', [ClientsController::class, 'createfromform'])->name('clients.create');
Route::get('/clients/showall/{id}', [ClientsController::class, 'showall'])->name('clients.showall');


// COMMANDE EDIT
Route::get('/commandes/edit/{forms}/', [ClientsController::class, 'edit'])->name('commandes.edit');
Route::put('/commandes/{forms}', [ClientsController::class, 'update'])->name('commandes.update');
Route::get('/commandes/{forms}/delete', [ClientsController::class, 'deletecommandes'])->name('commandes.delete');



///Modifier le nom d'un block

Route::get('/bloq/{bloq}/editbloq', [ClientsController::class,'editbloq'])->name('bloq.edit');
Route::put('/blocks/{id}', [ClientsController::class, 'updatebloq'])->name('bloq.update');




//Ordering the blocks
Route::post('/update-block-order', [OrderblockController::class,'updateOrder'])->name('updateblock');


//STRIPE CONTROLLER

Route::get('stripe/checkout', [StripeController::class, 'checkout'])->name('stripe.checkout');
Route::get('stripe/success', [StripeController::class, 'success'])->name('stripe.success');
Route::get('stripe/renew', [StripeController::class, 'renew'])->name('stripe.renew');
