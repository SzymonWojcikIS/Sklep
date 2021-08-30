<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Prod;
use Livewire\WithPagination;

class AdminProdComponent extends Component
{
    use WithPagination;

    public function deleteProd($id)
    {
        $prod = Prod::find($id);
        $prod->delete();
        session()->flash('message','Usunięty');
    }
    public function render()
    {
        
        $prods = Prod::paginate(10);
        return view('livewire.admin.admin-prod-component',['prods'=>$prods])->layout('layouts.base');
    }
}
