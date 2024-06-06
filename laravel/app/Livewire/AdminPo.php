<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\create_pr;

class AdminPo extends Component
{
    public $adminPurchaseOrder;

public function mount($id)
{
    $this->adminPurchaseOrder = create_pr::with('prsItems')->findOrFail($id);
}

    // public function render()
    // {
    //     return view('livewire.admin-po-detail', ['purchaseOrder' => $this->purchaseOrder]);
    // }

    public function render()
{
    return view('livewire.admin-po', [
        'adminPurchaseOrder' => $this->adminPurchaseOrder,
    ]);
}
}
