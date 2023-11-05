<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class ListingController extends Controller
{

    //LANDING PAGE
    public function index()
    {
        return view('listings.index', [
            'listings' => Listing::latest()->filter(request(['tag', 'search']))->paginate(4)
        ]);
    }

    //SINGLE PRODUCT
    public function show($slug)
    {
        $listing = Listing::where('slug', $slug)->firstOrFail();
        return view('listings.show', compact('listing'));
    }











    //show create form
    public function create()
    {
        return view('listings.create');
    }

    //store listing data
    public function store(Request $request)
    {
        $formFields = $request->validate([ //validacija unesenih podataka
            'title' => 'required',
            'company' => ['required', Rule::unique('listings', 'company')],
            'location' => 'required',
            'website' => 'required',
            'email' => ['required', 'email'],
            'tags' => 'required',
            'description' => 'required',
        ]);

        if ($request->hasFile('logo')) {
            $formFields['logo'] = $request->file('logo')->store('logos', 'public'); //provjeravamo logo input dali ima fajl i storamo ga u naknadno napravljeni logos folder u storage/app/public
            //pogledaj config filesystems za setup uplodanja fajlova iz local u public storage
        }

        $formFields['user_id'] = auth()->id(); //dodjeljivanje user id-a uplodanom postu da bi se znalo da post pripada tom useru

        Listing::create($formFields); //ubacuje podatke u bazu

        return redirect('/')->with('message', 'Listing created sucessfully!'); //postavljamo poruku u session nakon uspjesnog slanja obrasca
    }

    //show edit form
    public function edit(Listing $listing)
    {
        return view('listings.edit', ['listing' => $listing]);
    }

    //update listing
    public function update(Request $request, Listing $listing)
    {

        //Make sure logged in user is owner
        if ($listing->user_id != auth()->id()) { //ovo osigurava da samo logirani korisnik ciji su postovi moze ih editirati, znaci nema ono priko url-a finta
            abort(403, 'Unauthorized Action');
        }

        $formFields = $request->validate([ //validacija unesenih podataka
            'title' => 'required',
            'company' => ['required'], //ovaj put nije unique pravilo jer podatak vec postoji u bazi podataka
            'location' => 'required',
            'website' => 'required',
            'email' => ['required', 'email'],
            'tags' => 'required',
            'description' => 'required',
        ]);

        if ($request->hasFile('logo')) {
            $formFields['logo'] = $request->file('logo')->store('logos', 'public'); //provjeravamo logo input dali ima fajl i storamo ga u naknadno napravljeni logos folder u storage/app/public
            //pogledaj config filesystems za setup uplodanja fajlova iz local u public storage
        }

        $listing->update($formFields); //updejta podatke u bazu

        return back()->with('message', 'Listing updated sucessfully!'); //postavljamo poruku u session nakon uspjesnog slanja obrasca
        // back() koristi za redirekt odnosno povratak na show view
    }

    //delete listing
    public function destroy(Listing $listing)
    {

        //Make sure logged in user is owner
        if ($listing->user_id != auth()->id()) { //ovo osigurava da samo logirani korisnik ciji su postovi moze ih brisati, znaci nema ono priko url-a finta
            abort(403, 'Unauthorized Action');
        }

        $listing->delete();
        return redirect('/')->with('message', 'Listing deleted sucessfully!');
    }

    //manage listing
    public function manage()
    {
        return view('listings.manage', ['listings' => auth()->user()->listings()->get()]); //dohvacamo samo postove logiranog korisnika
    }
}
