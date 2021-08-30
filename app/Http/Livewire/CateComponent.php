<?php

namespace App\Http\Livewire;

use App\Models\Cate;
use App\Models\Prod;
use Livewire\Component;
use Livewire\WithPagination;
use Cart;


class CateComponent extends Component
{
    public $sorting;
    public $pagesize;
    public $cate_slug;

    public function mount($cate_slug)
    {
        $this->sorting = "default";
        $this->pagesize = 12;
        $this->cate_slug = $cate_slug;
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
        $cate = Cate::where('slug',$this->cate_slug)->first();
        $cate_id = $cate->id;
        $cate_name = $cate->name;
        if($this->sorting=='date')
        {
            $prods = Prod::where('cate_id',$cate_id)->orderBy('created_at','DESC')->paginate($this->pagesize);
        }
        else if($this->sorting=="price")
        {
            $prods = Prod::where('cate_id',$cate_id)->orderBy('regular_price','ASC')->paginate($this->pagesize);
        }
        else if($this->sorting=="price-desc")
        {
            $prods = Prod::where('cate_id',$cate_id)->orderBy('regular_price','DESC')->paginate($this->pagesize);
        }
        else{
            $prods = Prod::where('cate_id',$cate_id)->paginate($this->pagesize);
        }

        $cates = Cate::all();

        return view('livewire.cate-component', ['prods'=>$prods,'cates'=>$cates,'cate_name'=>$cate_name])->layout("layouts.base");
    }
}
