<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\PrsItem;

class CreatePurchaseOrder extends Component
{

    public $purchaseRequestId;
    public $prsItems;

    public function mount($id)
    {
        $this->purchaseRequestId = $id;
        $this->prsItems = PrsItem::where('create_pr_id', $id)->get();
    }
    public function render()
    {
        return view('livewire.create-purchase-order');
    }
}
