<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Response;
use Illuminate\Http\Request;
use App\Http\Controllers\homeController;
use App\Http\Controllers\homenewController;
use App\Http\Controllers\mesinfosController;
use App\Http\Controllers\profileController;
use App\Http\Controllers\newlyController;
use App\Http\Controllers\loginController;
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

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
/*
GET : Lecture
POST : Ajout
PUT : Modification complete
PATCH : modification partielle
DELETE : supprimer

*/

// frontend
Route::view('weeld', 'frontend.layouts');


Route::get('/', function () {
        return view('welcome');
});

Route::get('/wassup/{nom}', [homeController::class,'index']);
Route::get('/project', [homenewController::class,'index']);

Route::get('/profiles', [profileController::class,'index'])->name('touslesprofils.index');
Route::get('/profiles/{profile}', [profileController::class,'show'])->name('afficherdetails.index')->where('id','\d+');
// ->where('id','\d+'); condition only entier
Route::get('/create', [profileController::class,'create'])->name('create.index');
Route::POST('/profiles/store', [profileController::class,'store'])->name('store.index');
Route::get('/mesinfos', [mesinfosController::class,'index']);
Route::get('/newly', [newlyController::class,'index'])->name('new.index');
Route::get('/login', [loginController::class,'show'])->name('show.index');
Route::POST('/login', [loginController::class,'login'])->name('login.index');
Route::get('/logout', [loginController::class,'logout'])->name('logout.index');
Route::DELETE('/profiles/{profile}', [profileController::class,'destroy'])->name('destroy.index');

Route::get('/profiles/{profile}/edit', [profileController::class,'edit'])->name('edit.index');
Route::PUT('/profiles/{profile}', [profileController::class,'update'])->name('update.index');





Route::get('/hello', function () {
    $nom="zed";
    $prenom ="yaya";
    return view('hello' , [
        'nom' => $nom,
        'prenom' => $prenom,
        'cours' => ['PHP','MVC']
    ]);
});
Route::get('/salam/{nom}/{prenom}', function ($nom,$prenom) {
    return view('salam' , [
           'nom' => $nom,
           'prenom' => $prenom
    ]);
});
Route::get('/al/{nom}/{prenom}', function (Request $request) {
    /*    dd($request->nom); to drop a specific way on that    */
    return view('al' , [
           'nom' => $request->nom,
           'prenom' => $request->prenom
    ]);

});
Route::get('/cookie/get',function(Request $request){
    return ($request->cookie('age'));
});
Route::get('/cookie/set/{cookie}',function($cookie){
    $response = new Response();
    $cookieObject = cookie()->forever('age',$cookie);
    return $response->withCookie($cookieObject);
});


//HOME

Route::get('/test',function(){
    echo 'Encode<br>';
    $encode = encodePR("soufiane@softsevenart.com");
    dump($encode);
    echo 'Decode<br>';
    dump(decodePR( $encode ));
});

function decodePR($string) {
    $string_decode = '';
    for ($i=0; $i < strlen($string) / 7 ; $i++) {
        $string_decode .=  mb_chr(substr($string , 7 * $i , 7) + 1);
    }
    return $string_decode;
}
function encodePR($string)
{
    $string_encode = '';
    for ($i=0; $i < strlen($string); $i++) {
        $string_encode .=  str_pad(intval(mb_ord($string[$i]) - 1), 7, "0", STR_PAD_LEFT);
    }
    return $string_encode;
}


Route::get('/home', [backadminController::class,'home'])->name('home.index');
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
Route::POST('/landingpages/store', [landingpageController::class,'storelp'])->name('storelp.index');


// LP UPDATE
Route::get('/landingpages/{landingpages}/edit', [updateController::class,'edit'])->name('editlp.index');
Route::PUT('/landingpages/{landingpages}', [updateController::class,'update'])->name('updatelp.index');



//DELETE
Route::GET('/landingpages/{landingpages}', [deleteController::class,'destroy'])->name('destroylp.index');


// APPERCU

Route::get('/page/{id}', [ landingpageController::class,'show'])->name('landingpage.show');


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


