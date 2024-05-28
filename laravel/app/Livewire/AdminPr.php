<?php

namespace App\Livewire;

use App\Models\create_pr;
use Livewire\Component;
use Illuminate\Support\Facades\Redirect;

class AdminPr extends Component
{
    public $layout = 'layouts.app';
    public $createPr;
    public $status;
    public $approvedBy;
    public $approvedDesignation;
    public $note;

    public function createPurchaseOrder($id)
    {
        return redirect()->route('admin-po', ['id' => $id]);
    }

    public function mount($id)
    {
        $this->createPr = create_pr::with('purchaseRequest', 'prsItems')->findOrFail($id);
        $this->status = $this->createPr->purchaseRequest->status;
        $this->approvedBy = $this->createPr->approved_by;
        $this->approvedDesignation = $this->createPr->approved_designation;
        $this->note = $this->createPr->note;
    }

    public function updatePr()
    {
        $this->validate([
            'status' => 'required|in:denied,approved,pending',
            'approvedBy' => 'required_if:status,approved',
            'approvedDesignation' => 'required_if:status,approved',
            'note' => 'nullable',
        ]);

        $this->createPr->purchaseRequest->status = $this->status;
        $this->createPr->purchaseRequest->save();

        $this->createPr->approved_by = $this->approvedBy;
        $this->createPr->approved_designation = $this->approvedDesignation;
        $this->createPr->note = $this->note;
        $this->createPr->push();

        // Redirect to the desired route
        return Redirect::route('purchase-order-admin');
    }

    public function render()
    {
        return view('livewire.admin-pr', [
            'createPr' => $this->createPr,
        ]);
    }
}
