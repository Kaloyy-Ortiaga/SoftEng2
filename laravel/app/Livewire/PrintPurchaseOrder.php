<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\PurchaseOrder;

class PrintPurchaseOrder extends Component
{
    public $purchaseOrder;

    public function mount($po_number)
    {
        $this->purchaseOrder = PurchaseOrder::with('createPr.prsItems')->where('po_number', $po_number)->firstOrFail();
    }

    public function render()
    {
        return view('livewire.print-purchase-order', [
            'purchaseOrder' => $this->purchaseOrder,
        ]);
    }
}
