<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CookieConsent;

class CookieConsentController extends Controller
{
    public function giveConsent()
    {
        $identifier = request()->cookie('consent_identifier');

        if (!$identifier) {
            $identifier = uniqid(); // Generate a unique identifier for the visitor
            cookie()->queue(cookie('consent_identifier', $identifier, 365 * 24 * 60)); // Set the identifier in a cookie
        }

        CookieConsent::updateOrCreate(['identifier' => $identifier], ['consent' => true]);

        // Additional logic if needed

        return redirect()->route('home'); // Redirect to the homepage or another page
    }
}
