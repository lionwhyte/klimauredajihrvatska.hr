<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Support\Facades\Mail;
use App\Mail\SellerOrderConfirmation;
use App\Mail\BuyerOrderConfirmation;

class EmailTestController extends Controller
{
    public function sendTestEmail()
    {
        // Replace with a real order instance
        $order = Order::find(19);

        // Replace with a real user instance
        $user = "tikic1@live.com";

        // Send the email
        Mail::to($user)->send(new SellerOrderConfirmation($order));
        Mail::to($user)->send(new BuyerOrderConfirmation($order));

        return 'Test email sent!';
    }
}