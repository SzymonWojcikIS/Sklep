<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Faktura;



class AdminPrintFakturaComponent extends Component
{
    public function deleteFaktura($id)
    {
        $fakturas = Faktura::find($id);
        $fakturas->delete();
        session()->flash('message','Faktura usunieta');
    }

    public function render()
    {
        $fakturas = Faktura::paginate(5);
        return view('livewire.admin.admin-print-faktura-component',['fakturas'=>$fakturas])->layout('layouts.base');
    }
}
