<?php

namespace App\Http\Livewire;

use App\Models\Order;
use App\Models\OrderItem;
use App\Models\Shipping;
use App\Models\Transaction;
use Livewire\Component;
use PhpParser\Node\Stmt\Foreach_;
use Illuminate\Support\Facades\Auth;
use Cart;

class FakturaComponent extends Component
{
    
    public function render()
    {
                return view('livewire.checkout-component')->layout("layouts.base");
    }
}
