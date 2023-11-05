<?php

use App\Models\Listing;
use Faker\Provider\Lorem;
use Illuminate\Http\Request;
use App\Models\TutorialListing;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AkcijeController;
use App\Http\Controllers\ListingController;
use App\Http\Controllers\NajjeftinijeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


// Route::get('/tutorial/hello', function () {
//     return 'HELLO';
// });

Route::get('/tutorial/hello', function () {
    return response('<h1>HELLO</h1>', 200)
        ->header('Content-type', 'text/plain')
        ->header('foo', 'bar');
});


Route::get('tutorial/posts/{id}', function ($id) {
    //dd($id);
    //ddd($id);
    return response('Post ' . $id);
})->where('id', '[0-9]+');


Route::get('/tutorial/search', function (Request $request) { //get request kao što je laragigs.localhost/search?name=toni&age=35
    //dd($request); 
    //dd($request->name . ' ' . $request->age); 
    return ($request->name . ' ' . $request->age);
});


// Route::get('/tutorial', function () {
//     return view('listings', [
//         'heading' => 'Latest Listings',
//         'listings' => [
//             [
//                 'id' => 1,
//                 'title' => 'Listing One',
//                 'description' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Veritatis aliquid inventore, 
//                 illum quae itaque natus nihil animi est odit esse odio eum officia perferendis repudiandae id ratione assumenda facere praesentium et! 
//                 Quos corporis rerum nostrum, officia adipisci incidunt, atque nobis optio nulla accusantium debitis? Nihil tempore perferendis assumenda praesentium autem?'
//             ],
//             [
//                 'id' => 2,
//                 'title' => 'Listing Two',
//                 'description' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Veritatis aliquid inventore, 
//                 illum quae itaque natus nihil animi est odit esse odio eum officia perferendis repudiandae id ratione assumenda facere praesentium et! 
//                 Quos corporis rerum nostrum, officia adipisci incidunt, atque nobis optio nulla accusantium debitis? Nihil tempore perferendis assumenda praesentium autem?'
//             ],
//         ] 
//     ]);
// });


// All Listings Tutorial
Route::get('/tutorial', function () { // u ovom primjeru dohvaćamo listings sadržaj sa modela Listing.php
    return view('listings', [
        'heading' => 'Latest Listings',
        'listings' => TutorialListing::all()
    ]);
});

// Single Listing Tutorial
Route::get('/tutorial/listings/{id}', function ($id) {
    return view('listing', [
        'listing' => TutorialListing::find($id)
    ]);
});


// Common Resource Routes:
// index - Show all listings
// show - Show single listing
// create - Show form to create new listing
// store - Store new listing
// edit - Show form to edit listing
// update - Update listing
// destroy - Delete listing


// NASLOVNICA
Route::get('/', [HomeController::class, 'index']);

// LANDING PAGE
Route::get('/klima-uredaji', [ListingController::class, 'index']);

// SINGLE PRODUCT
Route::get('/listings/{slug}', [ListingController::class, 'show']);

// CONTACT PAGE
Route::get('/kontakt', function () {
    return view('kontakt');
});

// O NAMA
Route::get('/o-nama', function () {
    return view('o-nama');
});

// BLOG
Route::get('/blog', function () {
    return view('blog');
});

// ČESTA PITANJA    
Route::get('/cesta-pitanja', function () {
    return view('cesta-pitanja');
});

// AKCIJA KLIMA UREĐAJI
Route::get('/akcije', [AkcijeController::class, 'index']);

// NAJJEFTINIJE 
Route::get('/best-buy-klima-uredaji', [NajjeftinijeController::class, 'index']);

// MONTAŽA   
Route::get('/montaza-klima-uredaja', function () {
    return view('montaza-klima-uredaja');
});

// SERVIS   
Route::get('/servis-klima-uredaja', function () {
    return view('servis-klima-uredaja');
});

// DIZALICE TOPLINE  
Route::get('/blog/dizalica-topline', function () {
    return view('dizalica-topline');
});













// Show create form
Route::get('/listings/create', [ListingController::class, 'create'])->middleware('auth'); //samo logirani korisnici mogu otvoriti

// Store listing
Route::post('/listings', [ListingController::class, 'store'])->middleware('auth');

// Show edit form
Route::get('/listings/{listing}/edit', [ListingController::class, 'edit'])->middleware('auth');

//Update listing
Route::put('/listings/{listing}', [ListingController::class, 'update'])->middleware('auth');

// Delete listing
Route::delete('/listings/{listing}', [ListingController::class, 'destroy'])->middleware('auth');

// Manage listings
Route::get('/listings/manage', [ListingController::class, 'manage'])->middleware('auth');

// Show register form
Route::get('/register', [UserController::class, 'create'])->middleware('guest'); //treba jasno definirati i to koji sadrzaj nije za logiranog korisnika zato se stavlja guest odnosno sadrzaj koji samo guest moze otvoriti

// Create new user
Route::post('/users', [UserController::class, 'store'])->middleware('guest');

// Logout
Route::post('/logout', [UserController::class, 'logout'])->middleware('auth');

// Login form
Route::get('/login', [UserController::class, 'showLoginForm'])->name('login')->middleware('guest'); //moramo dati ime ruti login jer auth middleware je po defaultu setupiran da provjeri rutu pod login imenom odnodno da provjeri dali je korisnik autenticiran da moze otvarati određeni sadrzaj. Pogledaj u app/middlewares/authenticate 

// Login user
Route::post('/users/login', [UserController::class, 'login'])->middleware('guest');
//treba i u routeServiceProvider promijeniti default home rutu sa /home u / radi pravilnog redirecta ako nije vec








