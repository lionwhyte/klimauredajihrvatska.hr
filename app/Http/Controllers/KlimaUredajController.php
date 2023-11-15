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
}
