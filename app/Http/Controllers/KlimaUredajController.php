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


    //SEARCH PRODUCTS
    public function search(Request $request)
    {
        // Handle other filters
        // dd($request->input('onSale'));
        
        $selectedBrand = $request->input('brend');
        $selectedPower = $request->input('snaga');
        $selectedMinPrice = $request->input('min-cijena');
        $selectedMaxPrice = $request->input('max-cijena');
        $selectedArea = $request->input('prostor');
        $selectedEnergyLabel = $request->input('energetska-klasa');
        $selectedOnSale = $request->input('onSale');
        $selectedBestBuy = $request->input('bestBuy');

        function parsePrice($price)
        {
            $price = explode("-", $price);
            $selectedMinPrice = $price[0];
            $selectedMaxPrice = $price[1];
    
            return compact('selectedMinPrice', 'selectedMaxPrice');
        }
    
        if ($request->filled('cijena')) {
            extract(parsePrice($request->input('cijena')));
        }

        $klimaUredajiQuery  = KlimaUredaj::when($selectedBrand, function ($query) use ($selectedBrand) {
            return $query->where('brend', '=', $selectedBrand);
        })->when($selectedPower, function ($query) use ($selectedPower) {
            return $query->where('snaga_kw', '=', $selectedPower);
        })->when($selectedMinPrice, function ($query) use ($selectedMinPrice) {
            return $query->where('cijena', '>=', $selectedMinPrice);
        })->when($selectedMaxPrice, function ($query) use ($selectedMaxPrice) {
            return $query->where('cijena', '<=', $selectedMaxPrice);
        })->when($selectedArea, function ($query) use ($selectedArea) {
            return $query->where('prostor_m2', '=', $selectedArea);
        })->when($selectedEnergyLabel, function ($query) use ($selectedEnergyLabel) {
            return $query->where('energetski_razred_hladenja', '=', $selectedEnergyLabel);
        });

        // Add the condition for 'onSale' or 'bestBuy' if it is selected
        if ($selectedOnSale && $selectedBestBuy){
            $klimaUredajiQuery->has('onSale')->has('bestBuy');
        } elseif($selectedOnSale){
            $klimaUredajiQuery->has('onSale');
        } elseif($selectedBestBuy){
            $klimaUredajiQuery->has('bestBuy');
        }

        // Paginate the results
        $klimaUredaji = $klimaUredajiQuery->paginate(10);

        // Pass the results and selected filters to the view
        return view('klimaUredaji.index', 
        compact('klimaUredaji', 'selectedBrand', 'selectedPower', 'selectedMinPrice', 'selectedMaxPrice', 'selectedArea', 'selectedEnergyLabel', 'selectedOnSale', 'selectedBestBuy'))
        ->with('selectedBrand', $selectedBrand)
        ->with('selectedPower', $selectedPower)
        ->with('selectedMinPrice', $selectedMinPrice)
        ->with('selectedMaxPrice', $selectedMaxPrice)
        ->with('selectedArea', $selectedArea)   
        ->with('selectedEnergyLabel', $selectedEnergyLabel)
        ->with('selectedOnSale', $selectedOnSale)
        ->with('selectedBestBuy', $selectedBestBuy);
    }
    
}
