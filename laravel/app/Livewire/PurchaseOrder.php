<?php

namespace App\Livewire;

use App\Models\purchase_request;
use Livewire\Component;
use Livewire\WithPagination;


class PurchaseOrder extends Component
{
    use WithPagination;
    public $search;
    public $isAdmin = false;
    public function render()
    {
        $purchaseOrders = purchase_request::search($this->search)
            ->latest()
            ->paginate(7); // Paginate with 10 items per page

        return view('livewire.purchase-order', [
            'purchaseOrders' => $purchaseOrders,
        ]);
    }
}
