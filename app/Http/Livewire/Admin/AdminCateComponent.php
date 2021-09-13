<?php

namespace App\Http\Livewire\Admin;

use App\Models\Cate;
use Livewire\Component;
use Livewire\WithPagination;

class AdminCateComponent extends Component
{
    use WithPagination;

    public function deleteCate($id)
    {
        $cate = Cate::find($id);
        $cate->delete();
        session()->flash('message','Kategoria usunieta');
    }
    
    public function render()
    {
        $cates = Cate::paginate(5);
        return view('livewire.admin.admin-cate-component',['cates'=>$cates])->layout('layouts.base');
    }
}
