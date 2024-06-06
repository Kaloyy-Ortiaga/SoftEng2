<?php
namespace App\Livewire;

use App\Models\purchase_request;
use Livewire\Component;
use Livewire\WithPagination;

class PurchaseOrderAdmin extends Component
{
    use WithPagination;

    public $layout = 'layouts.app';
    public $search;

    public $selectedPurchaseRequestId;

    public function createPurchaseOrder($purchaseRequestId)
{
    $this->selectedPurchaseRequestId = $purchaseRequestId;
    return redirect()->route('admin.purchase-order-table', ['id' => $purchaseRequestId]);
}

    public function render()
    {
        $purchaseRequests = purchase_request::with(['creatingPr' => function ($query) {
            $query->withSum('prsItems', 'amount');
        }])
        ->search($this->search)
        ->latest()
        ->paginate(8);

        return view('livewire.purchase-order-admin', [
            'purchaseRequests' => $purchaseRequests,
        ]);
    }
}