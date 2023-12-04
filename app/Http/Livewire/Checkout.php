<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Cart as CartModel;

class Checkout extends Component
{
    public $cartCount = 0;
    public $cartTotal = 0;
    public $cartItems;

    protected $listeners = ['productCartUpdated' => 'updateCart'];

    public function render()
    {

        // Fetch cart items and calculate total price
        return view('livewire.checkout');
    }

    public function updateCart()
    {
        try {
            $this->cartItems = CartModel::with('product')->where('session_id', session()->getId())->get();
            $this->cartCount = $this->cartItems->sum('quantity');
            $this->cartTotal = $this->cartItems->sum(function ($item) {
                // Check if the product is on sale
                if ($item->product->onSale) {
                    // If on sale, apply the discount to the price
                    $discountedPrice = $this->calculateDiscountedPrice($item->product->cijena, $item->product->onSale->discount);
                    return $discountedPrice * $item->quantity;
                } else {
                    // If not on sale, use the regular price
                    return $item->product->cijena * $item->quantity;
                }
            });
        } catch (\Exception $e) {
            // Handle the exception (e.g., log it, show an error message)
            redirect(500);
        }
    }

    public function mount()
    {
        $this->updateCart();
    }

    // Add a refresh method
    public function refreshCart()
    {
        $this->updateCart();
    }

    private function calculateDiscountedPrice($originalPrice, $discountPercentage)
    {
        // Calculate the discounted price based on the discount percentage
        $discount = $originalPrice * ($discountPercentage / 100);
        $discountedPrice = $originalPrice - $discount;

        return $discountedPrice;
    }
}

