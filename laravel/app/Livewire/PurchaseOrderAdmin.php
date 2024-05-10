<?php

namespace App\Livewire;

use App\Models\purchase_request;
use Livewire\Component;

class PurchaseOrderAdmin extends Component
{
    public $layout = 'layouts.app';
    public $search;
    public function render()
    {
        $purchaseRequests = purchase_request::with(['creatingPr' => function ($query) {
            $query->withSum('prsItems', 'amount');
        }])->latest()->get();
    
        return view('livewire.purchase-order-admin', [
            'purchaseRequests' => purchase_request::search($this->search)->latest()-> get(), $purchaseRequests,
        ]);
    }
}