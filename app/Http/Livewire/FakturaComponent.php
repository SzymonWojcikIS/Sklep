<?php

namespace App\Http\Livewire;


use App\Models\Faktura;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use Cart;

class FakturaComponent extends Component
{
    public $fristname;
    public $lastname;
    public $email;
    public $mobile;
    public $adres;
    public $country;
    public $zipcode;
    public $cena;

    public $paymentmode;
    public $thankyou;

    public function updated($fields)
    {
        $this->validateOnly($fields,[
            'fristname'=> 'required',
            'lastname'=> 'required',
            'email'=> 'required|email',
            'mobile'=> 'required|numeric',
            'adres'=> 'required',            
            'country'=> 'required',
            'zipcode'=> 'required',
            'paymentmode'=> 'required'
        ]);
    }

    public function placeOrder()
    {
        $this->validate([
            'fristname'=> 'required',
            'lastname'=> 'required',
            'email'=> 'required|email',
            'mobile'=> 'required|numeric',
            'adres'=> 'required',
            'country'=> 'required',
            'zipcode'=> 'required',
            'paymentmode'=> 'required'
        ]);

        $fakturas = new Faktura();
        $fakturas->user_id = Auth::user()->id;
        $fakturas->cena = Cart::total();
        $fakturas->fristname = $this->fristname;
        $fakturas->lastname = $this->lastname;
        $fakturas->email = $this->email;
        $fakturas->mobile = $this->mobile;
        $fakturas->adres = $this->adres;
        $fakturas->country = $this->country;
        $fakturas->zipcode = $this->zipcode;
       
        $fakturas->save();

        foreach(Cart::instance('cart')->content() as $item)
        {
            $fakturaItem = new fakturaItem();
            $fakturaItem->prod_id = $item->id;
            $fakturaItem->faktura_id = $fakturas->id;
            $fakturaItem->cena = $item->price;
            $fakturaItem->quantity = $item->qty;
            $fakturaItem->save();
        }
        
        $this->thankyou = 1;
        
        session()->forget('faktura');
    }


    public function verifyForCheckout()
    {
        if(!Auth::check())
        {
            return redirect()->route('login');
        }
        else if($this->thankyou)
        {
            return redirect()->route('thankyou');
        }
    }

    public function render()
    {
        $this->verifyForCheckout();
        return view('livewire.faktura-component')->layout("layouts.base");
    }
}
