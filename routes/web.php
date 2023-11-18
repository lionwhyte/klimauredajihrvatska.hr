<?php

use App\Models\Listing;
use Faker\Provider\Lorem;
use App\Models\KlimaUredaj;
use Illuminate\Http\Request;
use App\Models\TutorialListing;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AkcijeController;
use App\Http\Controllers\ListingController;
use App\Http\Controllers\KlimaUredajController;
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
Route::get('/klima-uredaji', [KlimaUredajController::class, 'index']);

// SINGLE PRODUCT
Route::get('/klima-uredaji/{slug}', [KlimaUredajController::class, 'show']);

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

// KLIME AKCIJA 
Route::get('/blog/klime-akcija', function () {
    return view('klime-akcija');
});

// RASHLADNI UREĐAJI 
Route::get('/blog/rashladni-uredaji-sto-su-kako-rade-i-koji-odabrati', function () {
    return view('rashladni-uredaji-sto-su-kako-rade-i-koji-odabrati');
});

// ODABIR KLIMA UREĐAJA 
Route::get('/blog/odabir-klima-uredaja', function () {
    return view('odabir-klima-uredaja');
});

// ZATRAŽI CIJENIK 2,5kw
Route::get('/kompletan-cjenik-klima-25kw-za-prostore-od-7-25-m2', function () {
    return view('kompletan-cjenik-klima-25kw-za-prostore-od-7-25-m2');
});

Route::get('/kompletan-cjenik-klima-35kw-za-prostore-od-25-40-m2', function () {
    return view('kompletan-cjenik-klima-35kw-za-prostore-od-25-40-m2');
});

// ZATRAŽI CIJENIK 5kw
Route::get('/kompletan-cjenik-klima-5kw-za-prostore-od-40-60-m2', function () {
    return view('kompletan-cjenik-klima-5kw-za-prostore-od-40-60-m2');
});

// ZATRAŽI CIJENIK 7kw
Route::get('/kompletan-cjenik-klima-7kw-za-prostore-od-60-90-m2', function () {
    return view('kompletan-cjenik-klima-7kw-za-prostore-od-60-90-m2');
});

// KLIMA UREĐAJI NOVOSTI
Route::get('/blog/klima-uredaji-novosti', function () {
    return view('klima-uredaji-novosti');
});

// IDEALAN KLIMA UREĐAJ
Route::get('/blog/idealan-klima-uredaj', function () {
    return view('idealan-klima-uredaj');
});








