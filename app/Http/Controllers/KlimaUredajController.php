<?php

namespace App\Http\Controllers;

use App\Models\KlimaUredaj;
use Illuminate\Http\Request;

class KlimaUredajController extends Controller
{
    //LANDING PAGE
    public function index(Request $request)
    {
        // Default order by 'naslov' (alphabetical order)
        $orderBy = $request->get('order') === 'latest' ? 'created_at' : 'naslov';

        // Fetch data from the database based on the order
        $klimaUredaji = KlimaUredaj::orderBy($orderBy)->paginate(10);

        return view('klimaUredaji.index', ['klimaUredaji' => $klimaUredaji]);
    }

    //SINGLE PRODUCT
    public function show($slug)
    {
        $klimaUredaj = KlimaUredaj::where('slug', $slug)->firstOrFail();

        // Get related products based on ucinak_hladenja_kw
        $relatedProducts = KlimaUredaj::where('ucinak_hladenja_kw', '=', $klimaUredaj->ucinak_hladenja_kw)
        ->inRandomOrder()
        ->limit(8) // Adjust the limit as needed
        ->get();

        return view('klimaUredaji.show', compact('klimaUredaj', 'relatedProducts'));
    }
    
}
