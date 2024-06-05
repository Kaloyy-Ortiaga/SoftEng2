<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\create_pr;
use App\Models\PurchaseOrder;

class AdminDetailPo extends Component
{
    public $purchaseOrder;
    public $adminPurchaseOrder;
    public $note;

    public function mount($po_number)
    {
        $this->purchaseOrder = PurchaseOrder::where('po_number', $po_number)->firstOrFail();
        $this->adminPurchaseOrder = $this->purchaseOrder->createPr;
        $this->note = $this->adminPurchaseOrder->note; 
    }

    public function render()
    {
        return view('livewire.admin-detail-po', [
            'purchaseOrder' => $this->purchaseOrder,
            'adminPurchaseOrder' => $this->adminPurchaseOrder,
            'note' => $this->note,
        ]);
    }
}


