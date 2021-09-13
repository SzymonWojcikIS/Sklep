<?php

namespace App\Http\Livewire\Admin;

use App\Models\Cate;
use Livewire\Component;
use Illuminate\Support\Str;

class AdminEditCateComponent extends Component
{
    public $cate_slug;
    public $cate_id;
    public $name;
    public $slug;

    public function mount($cate_slug)
    {
        $this->cate_slug = $cate_slug;
        $cate = Cate::where('slug',$cate_slug)->first();
        $this->cate_id = $cate->id;
        $this->name = $cate->name;
        $this->slug = $cate->slug;
    }

    public function generateslug()
    {
        $this->slug = Str::slug($this->name);
    }

    public function updateCate()
    {
        $cate = Cate::find($this->cate_id);
        $cate->name = $this->name;
        $cate->slug = $this->slug;
        $cate->save();
        session()->flash('message','Kategoria zaktualizowana');
    }

    public function render()
    {
        return view('livewire.admin.admin-edit-cate-component')->layout('layouts.base');
    }
}
