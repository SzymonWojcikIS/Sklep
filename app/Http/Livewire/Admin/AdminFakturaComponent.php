<?php

namespace App\Http\Livewire\Admin;

use App\Models\Faktura;
use Livewire\Component;
use Livewire\WithPagination;

class AdminFakturaComponent extends Component
{
    use WithPagination;

    public function deleteFaktura($id)
    {
        $faktura = Faktura::find($id);
        $faktura->delete();
        session()->flash('message','Faktura usunieta');
    }
    
    public function render()
    {
        $fakturas = Faktura::paginate(5);
        return view('livewire.admin.admin-faktura-component',['fakturas'=>$fakturas])->layout('layouts.base');
    }
}
