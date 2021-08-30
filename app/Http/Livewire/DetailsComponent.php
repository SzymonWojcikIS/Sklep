<?php

namespace App\Http\Livewire;

use App\Models\Prod;
use Livewire\Component;
use Cart;

class DetailsComponent extends Component
{
    public $slug;

    public function mount($slug)
    {
        $this->slug = $slug;
    }

    public function store($prod_id,$prod_name,$prod_price)
    {
        Cart::add($prod_id,$prod_name,1,$prod_price)->associate('App\Models\Prod');
        session()->flash('success_message','Item added in Cart');
        return redirect()->route('prod.cart');
    }

    public function render()
    {
        $prod = Prod::where('slug',$this->slug)->first();
        $popular_prods = Prod::inRandomOrder()->limit(4)->get();
        $related_prods = Prod::where('cate_id',$prod->cate_id)->inRandomOrder()->limit(5)->get();
        return view('livewire.details-component',['prod'=>$prod, 'popular_prods'=>$popular_prods, 'related_prods'=>$related_prods])->layout('layouts.base');
    }
}
