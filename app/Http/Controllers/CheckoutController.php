<?php

namespace App\Http\Controllers;


use Illuminate\Support\Facades\Validator;
use App\Models\Order;
use App\Models\OrderItem;
use Illuminate\Http\Request;
use App\Models\Cart as CartModel;
use Illuminate\Support\Facades\Mail;
use App\Mail\BuyerOrderConfirmation;
use App\Mail\SellerOrderConfirmation;


class CheckoutController extends Controller
{
    public function index(){

        return view('cart.checkout');
    }

    public function createOrder(Request $request)
    {
        // Validate the request data
        $validator = Validator::make($request->all(), [
            'metoda_placanja' => 'required|string|in:1,2,3',
            'billing_first_name' => 'required|string|max:50',
            'billing_last_name' => 'required|string|max:50',
            'billing_company' => 'nullable|string|max:50',
            'billing_address_1' => 'required|string|max:255',
            'billing_address_2' => 'nullable|string|max:255',
            'billing_city' => 'required|string|max:50',
            'billing_state' => 'required|string|max:50',
            'billing_postcode' => 'required|string|max:20',
            'billing_phone' => 'required|string|max:20',
            'billing_email' => 'required|string|email|max:255',
            'order_comments' => 'nullable|string|max:255',
            'terms' => 'accepted',
        ], [
            'metoda_placanja.required' => 'Molimo odaberite metodu plaćanja.',
            'metoda_placanja.in' => 'Metoda placanja je neispravna',
            'billing_first_name.required' => 'Ime je obavezno polje.',
            'billing_first_name.max' => 'Ime ne smije biti duže od :max znakova.',
            'billing_last_name.required' => 'Prezime je obavezno polje.',
            'billing_last_name.max' => 'Prezime ne smije biti duže od :max znakova.',
            'billing_company.max' => 'Naziv poduzeća ne smije biti duže od :max znakova.',
            'billing_address_1.required' => 'Ulica je obavezno polje.',
            'billing_address_1.max' => 'Ulica ne smije biti duža od :max znakova.',
            'billing_address_2.max' => 'Kat, broj stana ili sl. ne smije biti duže od :max znakova.',
            'billing_city.required' => 'Grad je obavezno polje.',
            'billing_city.max' => 'Grad ne smije biti duži od :max znakova.',
            'billing_state.required' => 'Županija je obavezno polje.',
            'billing_state.max' => 'Županija ne smije biti duža od :max znakova.',
            'billing_postcode.required' => 'Poštanski broj je obavezno polje.',
            'billing_postcode.max' => 'Poštanski broj ne smije biti duži od :max znakova.',
            'billing_phone.required' => 'Telefon je obavezno polje.',
            'billing_phone.max' => 'Telefon ne smije biti duži od :max znakova.',
            'billing_email.required' => 'Email je obavezno polje.',
            'billing_email.max' => 'Email ne smije biti duži od :max znakova.',
            'billing_email.email' => 'Email je neispravan.',
            'order_comments.max' => 'Napomena ne smije biti duža od :max znakova.',
            'terms' => 'Pročitajte i prihvatite uvjete korištenja i odredbe kako biste nastavili s narudžbom.'
           
            // Other custom messages...
        ]);

        if ($validator->fails()) {
            return redirect('/checkout')
            ->withErrors($validator)
            ->withInput();
        }
        
        // Access the validated data using the validated() method
        $validatedData = $validator->validated();

        // Get cart items
        $cartItems = CartModel::with('product')->where('session_id', session()->getId())->get();

        // Create a new order
        $order = Order::create([
            'order_id' => uniqid(), // Generate a unique order ID
            'payment_method_id' => $validatedData['metoda_placanja'],
            'buyer_name' => $validatedData['billing_first_name'],
            'buyer_lastname' => $validatedData['billing_last_name'],
            'buyer_company_name' => $validatedData['billing_company'],
            'buyer_country' => 'HR',
            'buyer_address' => $validatedData['billing_address_1'],
            'buyer_apartment_number_or_floor' => $validatedData['billing_address_2'],
            'buyer_city' => $validatedData['billing_city'],
            'buyer_county' => $validatedData['billing_state'],
            'buyer_postal_code' => $validatedData['billing_postcode'],
            'buyer_phone_number' => $validatedData['billing_phone'],
            'buyer_email' => $validatedData['billing_email'],
            'buyer_remarks' => $validatedData['order_comments'],
            'total_amount' => $cartItems->sum(function ($item) {
                // Check if the product is on sale
                if ($item->product->onSale) {
                    // If on sale, apply the discount to the price
                    $discountedPrice = $this->calculateDiscountedPrice($item->product->cijena, $item->product->onSale->discount);
                    return $discountedPrice * $item->quantity;
                } else {
                    // If not on sale, use the regular price
                    return $item->product->cijena * $item->quantity;
                }
            }),
        ]);

        // Get the last inserted order's id
        $lastOrderId = $order->order_id;

        // Add order items
        foreach ($cartItems as $cartItem) {
            $unitPrice = 0;
           
            // Check if the product is on sale
            if ($cartItem->product->onSale) {
                // If on sale, calculate the unit price with discount
                $unitPrice = $cartItem->product->cijena - ($cartItem->product->cijena * ($cartItem->product->onSale->discount / 100));
            } else {
                // If not on sale, use the regular price
                $unitPrice = $cartItem->product->cijena;
            }

            $subtotal = $unitPrice * $cartItem->quantity;
            
            $orderItem = new OrderItem([
                'order_id' => $lastOrderId,
                'product_id' => $cartItem['product_id'],
                'quantity' => $cartItem['quantity'],
                'unit_price' => (float)sprintf("%.2f", $unitPrice),
                'subtotal' => (float)sprintf("%.2f", $subtotal),
            ]);
            $order->items()->save($orderItem);
        }

        $request->session()->regenerate();

        // Send email to buyer and seller
        Mail::to($order->buyer_email)->send(new BuyerOrderConfirmation($order));
        Mail::to("toni.technoprom@gmail.com")->send(new SellerOrderConfirmation($order));

        // Redirect to the order received page with order details
        return redirect()->route('order.received', ['order_id' => $order->order_id]);
    }

    // Add other methods as needed
    public function orderReceived($order_id)
    {

        $order = Order::where('order_id', $order_id)->with('items.product')->firstOrFail();

        // Send email to buyer and seller
        if (!$order->email_sent) {
            Mail::to($order->buyer_email)->send(new BuyerOrderConfirmation($order));
            Mail::to("toni.technoprom@gmail.com")->send(new SellerOrderConfirmation($order));

            // Update the email_sent flag
            $order->update(['email_sent' => true]);
        }
        return view('cart.order-received', compact('order'));
    }

    private function calculateDiscountedPrice($originalPrice, $discountPercentage)
    {
        // Calculate the discounted price based on the discount percentage
        $discount = $originalPrice * ($discountPercentage / 100);
        $discountedPrice = $originalPrice - $discount;

        return $discountedPrice;
    }
}
