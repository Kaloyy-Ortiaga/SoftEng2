<?php

namespace App\Livewire;

use App\Models\purchase_request;
use Livewire\Component;
use Livewire\WithPagination;

class PurchaseOrderAdmin extends Component
{

    use WithPagination;
    public $search;
    public function render()
    {
        $purchaseRequests = purchase_request::with('creatingPr')
            ->search($this->search)
            ->latest()
            ->paginate(7);

        return view('livewire.purchase-order-admin', [
            'purchaseRequests' => $purchaseRequests,
        ]);
    }
}
