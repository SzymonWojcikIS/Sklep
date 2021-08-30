<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Cart;
use Illuminate\Support\Facades\Auth;




class CartComponent extends Component
{
    public function increaseQuantity($rowId)
    {
        $prod = Cart::get($rowId);
        $qty = $prod->qty + 1;
        Cart::update($rowId,$qty);
    }

    public function decreaseQuantity($rowId)
    {
        $prod = Cart::get($rowId);
        $qty = $prod->qty - 1;
        Cart::update($rowId,$qty);
    }

    public function destroy($rowId)
    {
        Cart::remove($rowId);
        session()->flash('success_message','Item has been remowved');
    }

    public function destroyAll()
    {
        Cart::destroy();
    }

    public function checkout()
    {
        if(Auth::check())
        {
            return redirect()->route('checkout');
        }
        else
        {
            return redirect()->route('login');
        }
    }

    public function setAmountForCheckout()
    {
        if(!Cart::instance('cart')->count() > 0)
        {
            session()->forget('checkout');
            return;
        }
        session()->put('checkout',[
            'discount' =>0,
            'subtotal' =>Cart::instance('cart')->subtotal(),
            'tax' => Cart::instance('cart')->tax(),
            'total' => Cart::instance('cart')->total()
        ]);
    }

    public function render()
    {
        return view('livewire.cart-component')->layout("layouts.base");
    }
}
