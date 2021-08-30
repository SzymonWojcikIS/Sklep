<?php

namespace App\Http\Livewire;

use App\Models\Prod;
use Livewire\Component;
use Livewire\WithPagination;
use Cart;
use App\Models\Cate;


class MenuComponent extends Component
{
    public $sorting;
    public $pagesize;

    public function mount()
    {
        $this->sorting = "default";
        $this->pagesize = 12;
    }
    public function store($prod_id,$prod_name,$prod_price)
    {
        Cart::add($prod_id,$prod_name,1,$prod_price)->associate('App\Models\Prod');
        session()->flash('success_message','Item added in Cart');
        return redirect()->route('prod.cart');
    }


    use WithPagination;
    public function render()
    {
        if($this->sorting=='date')
        {
            $prods = Prod::orderBy('created_at','DESC')->paginate($this->pagesize);
        }
        else if($this->sorting=="price")
        {
            $prods = Prod::orderBy('regular_price','ASC')->paginate($this->pagesize);
        }
        else if($this->sorting=="price-desc")
        {
            $prods = Prod::orderBy('regular_price','DESC')->paginate($this->pagesize);
        }
        else{
            $prods = Prod::paginate($this->pagesize);
        }

        $cates = Cate::all();

        return view('livewire.menu-component', ['prods'=>$prods,'cates'=>$cates])->layout("layouts.base");
    }
}
