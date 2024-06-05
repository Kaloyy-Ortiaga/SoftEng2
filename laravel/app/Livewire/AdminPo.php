<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\create_pr;
use App\Models\PurchaseOrder;

class AdminPo extends Component
{
    public $adminPurchaseOrder;

    public function mount($id)
    {
        $this->adminPurchaseOrder = create_pr::with('prsItems')->findOrFail($id);
    }

    public $layout = 'layouts.app';
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

    public $createPurchase;

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
        'po_number' => 'required|unique:purchase_orders',
    ];

    protected $messages = [
        'supplier.required' => 'The supplier field is required.',
        'tel_no.required' => 'The tel no. field is required.',
        'po_date.required' => 'The date field is required.',
        'po_date.date' => 'The date must be a valid date.',
        'address.required' => 'The address field is required.',
        'tin.required' => 'The TIN field is required.',
        'mop.required' => 'The MOP field is required.',
        'po_auth.required' => 'The authorized official field is required.',
        'po_authPos.required' => 'The authorized official position field is required.',
        'po_cfa.required' => 'The CFA certified by field is required.',
        'po_cfapos.required' => 'The CFA position field is required.',
        'po_status.required' => 'The status field is required.',
        'po_word.required' => 'The sub-total in word field is required.',
        'po_place.required' => 'The place of delivery field is required.',
        'po_dateod.required' => 'The date of delivery field is required.',
        'po_dateod.date' => 'The date of delivery must be a valid date.',
        'po_validity.required' => 'The price validity field is required.',
        'po_term.required' => 'The payment term field is required.',
        'po_number.unique' => 'The PO number already exists.',
        // Add other validation messages for the remaining fields
    ];

    public function submitPo()
    {
        $this->validate();

        $createPurchase = PurchaseOrder::create([
            'POdate_created'=> now(),
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
            'po_number' => $this->po_number,
        ]);

        $this->reset();

        return redirect()->route('purchase-order.detail', $createPurchase->id);
    }

    public function render()
    {
        return view('livewire.admin-po', [
            'adminPurchaseOrder' => $this->adminPurchaseOrder,
        ]);
    }
}
