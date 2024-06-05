<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\PurchaseOrder;

class PurchaseOrderDetail extends Component
{
    public $purchaseOrder;
    public $adminPurchaseOrder;
    public $note;

    public $supplier;
    public $tel_no;
    public $po_date;
    public $address;
    public $tin;
    public $mop;
    public $po_auth;
    public $po_authPos;
    public $po_cfa;
    public $po_cfapos;
    public $po_status;
    public $po_word;
    public $po_place;
    public $po_dateod;
    public $po_validity;
    public $po_term;
    public $po_number;

    protected $rules = [
        'supplier' => 'required',
        'tel_no' => 'required',
        'po_date' => 'required|date',
        'address' => 'required',
        'tin' => 'required',
        'mop' => 'required',
        'po_auth' => 'required',
        'po_authPos' => 'required',
        'po_cfa' => 'required',
        'po_cfapos' => 'required',
        'po_status' => 'required',
        'po_word' => 'required',
        'po_place' => 'required',
        'po_dateod' => 'required|date',
        'po_validity' => 'required',
        'po_term' => 'required',
    ];

    public function mount($purchaseOrder, $adminPurchaseOrder, $note)
    {
        $this->purchaseOrder = $purchaseOrder;
        $this->adminPurchaseOrder = $adminPurchaseOrder;
        $this->note = $note;
        $this->fill([
            'supplier' => $purchaseOrder->supplier,
            'tel_no' => $purchaseOrder->tel_no,
            'po_date' => $purchaseOrder->po_date,
            'address' => $purchaseOrder->address,
            'tin' => $purchaseOrder->tin,
            'mop' => $purchaseOrder->mop,
            'po_auth' => $purchaseOrder->po_auth,
            'po_authPos' => $purchaseOrder->po_authPos,
            'po_cfa' => $purchaseOrder->po_cfa,
            'po_cfapos' => $purchaseOrder->po_cfapos,
            'po_status' => $purchaseOrder->po_status,
            'po_word' => $purchaseOrder->po_word,
            'po_place' => $purchaseOrder->po_place,
            'po_dateod' => $purchaseOrder->po_dateod,
            'po_validity' => $purchaseOrder->po_validity,
            'po_term' => $purchaseOrder->po_term,
            'po_number' => $purchaseOrder->po_number,
        ]);
    }

    public function updatePo()
    {
        $this->validate();

        $this->purchaseOrder->update([
            'supplier' => $this->supplier,
            'tel_no' => $this->tel_no,
            'po_date' => $this->po_date,
            'address' => $this->address,
            'tin' => $this->tin,
            'mop' => $this->mop,
            'po_auth' => $this->po_auth,
            'po_authPos' => $this->po_authPos,
            'po_cfa' => $this->po_cfa,
            'po_cfapos' => $this->po_cfapos,
            'po_status' => $this->po_status,
            'po_word' => $this->po_word,
            'po_place' => $this->po_place,
            'po_dateod' => $this->po_dateod,
            'po_validity' => $this->po_validity,
            'po_term' => $this->po_term,
        ]);

        session()->flash('message', 'Purchase Order updated successfully.');
        return redirect()->route('purchase-order-view');
    }

    public function render()
    {
        return view('livewire.purchase-order-detail', [
            'purchaseOrder' => $this->purchaseOrder,
            'adminPurchaseOrder' => $this->adminPurchaseOrder,
            'note' => $this->note,
        ]);
    }
}

