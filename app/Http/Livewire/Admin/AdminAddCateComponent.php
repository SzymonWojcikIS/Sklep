<?php

namespace App\Http\Livewire\Admin;

use App\Models\Cate;
use Livewire\Component;
use Illuminate\Support\Str;

class AdminAddCateComponent extends Component
{
    public $name;
    public $slug;
    
    public function generateslug()
    {
        $this->slug = Str::slug($this->name);
    }

    public function soreCate()
    {
        $cate = new Cate();
        $cate->name = $this->name;
        $cate->slug = $this->slug;
        $cate->save();
        session()->flash('message','Category utworzone');
    }


    public function render()
    {
        return view('livewire.admin.admin-add-cate-component')->layout('layouts.base');
    }
}
