<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\purchase_request;

class PrintRequest extends Component
{
    public $purchaseOrder;

    public function mount($id)
    {
        $this->purchaseOrder = purchase_request::with('creatingPr.prsItems')->findOrFail($id);
    }

    public function render()
    {
        return view('livewire.print-request', [
            'purchaseOrder' => $this->purchaseOrder,
        ]);
    }
}