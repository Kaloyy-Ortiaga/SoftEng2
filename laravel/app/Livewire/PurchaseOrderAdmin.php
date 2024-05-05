<?php

namespace App\Livewire;

use App\Models\purchase_request;
use Livewire\Component;

class PurchaseOrderAdmin extends Component
{
    public function render()
    {
        $purchaseRequests = purchase_request::with('creatingPr')->latest()->get();
        
        return view('livewire.purchase-order-admin', [
            'purchaseRequests' => $purchaseRequests,
        ]);
    }
}