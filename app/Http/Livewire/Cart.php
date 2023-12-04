<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Cart as CartModel;

class Cart extends Component
{
    public $cartCount = 0;
    public $cartTotal = 0;
    public $cartItems;

    protected $listeners = ['productCartUpdated' => 'updateCart'];

    public function render()
    {
        // Fetch cart items and calculate total price
        return view('livewire.cart');
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

    public function removeProductFromCart($productId)
    {
        try {
            CartModel::where('session_id', session()->getId())
                ->where('product_id', $productId)
                ->delete();
            // $this->emit('productRemovedFromCart');
            // $this->updateCart(); // Assuming you have an updateCart method to refresh the cart details
            $this->emit('productCartUpdated');
        } catch (\Exception $e) {
            // Handle the exception (e.g., log it, show an error message)
            $this->addError('quantity', 'Failed to remove the product from the cart.');
        }
    }

    public function incrementCartProductQuantity($productId)
    {
        try {
            $maxQuantity = 10; // Replace with the maximum quantity allowed
            CartModel::where('session_id', session()->getId())
                ->where('product_id', $productId)
                ->where('quantity', '<', $maxQuantity)
                ->increment('quantity', 1);

            $this->emit('productCartUpdated');
        } catch (\Exception $e) {
            // Handle the exception (e.g., log it, show an error message)
            $this->addError('quantity', 'Failed to increment product quantity in the cart.');
        }
    }
    
    public function decrementCartProductQuantity($productId)
    {
        try { 
            $minQuantity = 1;
            CartModel::where('session_id', session()->getId())
            ->where('product_id', $productId)
            ->where('quantity', '>', $minQuantity)
            ->increment('quantity', -1);

            $this->emit('productCartUpdated');
        } catch (\Exception $e) {
            // Handle the exception (e.g., log it, show an error message)
            $this->addError('quantity', 'Failed to increment product quantity in the cart.');
        }
    }
}

