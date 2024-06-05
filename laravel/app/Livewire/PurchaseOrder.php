<?php

namespace App\Livewire;

use App\Models\purchase_request;
use Livewire\Component;
use Livewire\WithPagination;


class PurchaseOrder extends Component
{
<<<<<<< Updated upstream
    public $layout = 'layouts.app';
    use WithPagination;
=======
    use WithPagination;

>>>>>>> Stashed changes
    public $search;
    public $isAdmin = false;
    public function render()
{
    $purchaseOrders = purchase_request::latest()->paginate(10);
        return view('livewire.purchase-order', [
            'purchaseOrders' => $purchaseOrders,
        ]);
    }
}
