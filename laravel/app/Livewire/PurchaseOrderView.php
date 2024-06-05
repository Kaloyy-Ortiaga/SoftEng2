<?php
namespace App\Livewire;

use App\Models\PurchaseOrder;
use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Http\Request;

class PurchaseOrderView extends Component
{
    use WithPagination;

    public $search;

    public $purchaseOrder;
    public function showDetail($id)
    {
        $purchaseOrder = PurchaseOrder::findOrFail($id);

        return view('livewire.includes.admin.purchase-order-detail', compact('purchaseOrder'));
    }
    public function redirectToAdminPO($id)
    {
        // Logic to retrieve the purchase order and any necessary data
        $purchaseOrder = PurchaseOrder::findOrFail($id);

        // Redirect to the admin-po route passing the purchase order ID
        return redirect()->route('admin-po.show', $purchaseOrder->id);
    }



    public function update(Request $request, $id)
    {
        $purchaseOrder = PurchaseOrder::findOrFail($id);

        $purchaseOrder->update($request->all());

        return redirect()->route('purchase-order.show', $purchaseOrder->id)->with('success', 'Purchase Order updated successfully.');
    }


    public function render()
    {
        $purchaseOrders = PurchaseOrder::with('createPr')
            ->when($this->search, function ($query) {
                $query->search($this->search);
            })
            ->paginate(8);

        return view('livewire.purchase-order-view', [
            'purchaseOrders' => $purchaseOrders,
        ]);
    }
}

