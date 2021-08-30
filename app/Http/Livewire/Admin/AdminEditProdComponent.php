<?php

namespace App\Http\Livewire\Admin;

use App\Models\Prod;
use App\Models\Cate;
use Livewire\Component;
use Illuminate\Support\Str;
use Carbon\Carbon;
use Livewire\WithFileUploads;

class AdminEditProdComponent extends Component
{
    use WithFileUploads;
    public $name;
    public $slug;
    public $short_description;
    public $description;
    public $regular_price;
    public $sale_price;
    public $SKU;
    public $stock_status;
    public $featured;
    public $quantity;
    public $image;
    public $cate_id;
    public $newimage;
    public $prod_id;

    public function mount($prod_slug)
    {
        $prod = Prod::where('slug',$prod_slug)->first();
        $this-> name = $prod->name;
        $this-> slug = $prod->slug;
        $this-> short_description = $prod->short_description;
        $this-> description = $prod->description;
        $this-> regular_price = $prod->regular_price;
        $this-> sale_price = $prod->sale_price;
        $this-> SKU = $prod->SKU;
        $this-> stock_status = $prod->stock_status;
        $this-> featured = $prod->featured;
        $this-> quantity = $prod->quantity;
        $this-> image = $prod->image;
        $this-> cate_id = $prod->cate_id;
        $this-> prod_id = $prod->id;
    }

    public function generateSlug()
    {
        $this->slug = Str::slug($this->name,'-');
    }

    public function updateProd()
    {
        $prod = Prod::find($this->prod_id);
        $prod->name = $this->name;
        $prod->slug = $this->slug;
        $prod->short_description = $this->short_description;
        $prod->description = $this->description;
        $prod->regular_price = $this->regular_price;
        $prod->sale_price = $this->sale_price;
        $prod->SKU = $this->SKU;
        $prod->stock_status = $this->stock_status;
        $prod->featured = $this->featured;
        $prod->quantity = $this->quantity;
        if($this->newimage)
        {
            $imageName = Carbon::now()->timestamp. '.' . $this->newimage->extension();
            $this->newimage->storeAs('prods',$imageName);
            $prod->image = $imageName;
        }

        $prod->cate_id = $this->cate_id;
        $prod->save();
        session()->flash('message','zaktualizowano');
    }

    public function render()
    {
        $cates = Cate::all();
        return view('livewire.admin.admin-edit-prod-component',['cates'=>$cates])->layout('layouts.base');
    }
}
