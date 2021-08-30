<?php

namespace App\Http\Livewire\Admin;

use App\Models\Cate;
use App\Models\Prod;
use Carbon\Carbon;
use Livewire\Component;
use Illuminate\Support\Str;
use Livewire\WithFileUploads;


class AdminAddProdComponent extends Component
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

    public function mount()
    {
        $this->stock_status = 'instock';
        $this->featured = 0;
    }

    public function generateSlug()
    {
        $this->slug = Str::slug($this->name,'-');
    }

    public function addProd()
    {
        $prod = new Prod();
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
        $imageName = Carbon::now()->timestamp. '.' . $this->image->extension();
        $this->image->storeAs('prods',$imageName);
        $prod->image = $imageName;
        $prod->cate_id = $this->cate_id;
        $prod->save();
        session()->flash('message','Stworzono');
    }

    public function render()
    {
        $cates = Cate::all();
        return view('livewire.admin.admin-add-prod-component',['cates'=>$cates])->layout('layouts.base');
    }
}
