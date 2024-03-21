<?php

namespace App\Livewire;

use App\Models\purchase_request;
use Livewire\Component;
use Livewire\WithPagination;


class PurchaseOrder extends Component
{
    use WithPagination;
    public $search; 
    public function render()
    {
        return view('livewire.purchase-order', [
            'purchaseOrder' => purchase_request::latest()-> get()
        ]);
    }
}
