<?php
namespace App\Livewire;

use App\Models\PrsItem;
use Livewire\Component;
use App\Models\PurchaseOrder;
use Livewire\WithPagination;

class PurchaseOrderView extends Component
{
    use WithPagination;

    public function render()
    {
        $purchaseOrders = PurchaseOrder::with('createPr')->paginate(10);

        return view('livewire.purchase-order-view', [
            'purchaseOrders' => $purchaseOrders,
        ]);
    }
}
