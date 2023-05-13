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


use App\Http\Controllers\SupportController;



Route::get('/home', [backadminController::class,'dashboard'])->name('backadmin.dashboard');
// SIGNUP
Route::get('/inscrivez-vous', [backadminController::class,'show'])->name('signupview.index');
Route::POST('/inscrivez-vous/store', [backadminController::class,'store'])->name('signup.index');
//SIGN IN
Route::get('/connectez-vous', [backadminController::class,'page'])->name('signinn.index');
Route::POST('/connectez-vous', [backadminController::class,'login'])->name('signin.index');

//************************************************//

// LP CREATIONS - ADDITION
Route::get('/landingpages', [landingpageController::class,'landingpageslist'])->name('landingpageslist.index');
Route::GET('/landingpages/ajouter', [landingpageController::class,'landingpageajouter'])->name('landingpageajouter.index');
Route::POST('/landingpages/storepage', [landingpageController::class,'storelp'])->name('storelp.index');


// LP UPDATE
Route::get('/landingpages/{landingpages}/edit', [updateController::class,'edit'])->name('editlp.index');
Route::PUT('/landingpages/{landingpages}', [updateController::class,'update'])->name('updatelp.index');



//DELETE
Route::GET('/landingpages/{landingpages}', [deleteController::class,'destroy'])->name('destroylp.index');


// APPERCU

Route::get('/page/{id}', [ landingpageController::class,'show'])->name('landingpage.show');
Route::POST('/page/{id}/store', [landingpageController::class,'store'])->name('leads.store');


// *********************************************** //


//BUILD LP WITH BLOCKS
Route::GET('/blocks/ajouterblock', [BlockController::class,'ajouterblock'])->name('ajouterblock.index');
Route::POST('/blocks/storeblock', [BlockController::class,'storeblock'])->name('storeblock.index');
Route::get('/landingpage/blocks', [BlockController::class,'blockslist'])->name('blockslist.index');


//DELETE BLOCKS
Route::get('/blocks/{blocks}', [deleteController::class,'destroyblock'])->name('destroyblock.index');



// Route::get('/landingpage/{id}/create_block', [BlockController::class, 'create'])->name('create_block.index');
Route::get('/create_block', [BlockController::class, 'create'])->name('create_block.index');

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