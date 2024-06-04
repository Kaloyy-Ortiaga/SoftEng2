<?php
namespace App\Livewire;

use App\Models\PrsItem;
use Livewire\Component;
use App\Models\PurchaseOrder;
use Livewire\WithPagination;

class PurchaseOrderView extends Component
{
    use WithPagination;
    public $search;

    public function render()
    {
        $purchaseOrders = PurchaseOrder::with('createPr')
        ->when($this->search, function ($query) {
            $query->search($this->search);
        })
        ->paginate(8);


        return view('livewire.purchase-order-view', [
            'purchaseOrders' => $purchaseOrders,
        ]);
    }
}
