<?php

namespace App\Livewire;

use App\Models\PrsItem;
use Livewire\Component;
use App\Models\PurchaseOrder;

class PurchaseOrderView extends Component
{
    public function render()
    {
    

        return view('livewire.purchase-order-view',[
            'purchaseorders' => PurchaseOrder::all(),
            'prsamount' => PrsItem::all(),
        ]);
    }
}
