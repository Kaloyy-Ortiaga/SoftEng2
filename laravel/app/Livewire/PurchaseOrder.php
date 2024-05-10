<?php

namespace App\Livewire;

use Livewire\Component;

class PurchaseOrder extends Component
{
<<<<<<< HEAD
    public $layout = 'layouts.app';
    use WithPagination;
    public $search;
    public $isAdmin = false;
    public function render()
{
    $purchaseOrders = purchase_request::latest()->paginate(10);
        return view('livewire.purchase-order', [
            'purchaseOrders' =>purchase_request::search($this->search)->latest()-> get(), $purchaseOrders
            
        ]);
=======
    public function render()
    {
        return view('livewire.purchase-order');
>>>>>>> parent of 5903152 (Merge pull request #2 from Kaloyy-Ortiaga/anotherbranch)
    }
}