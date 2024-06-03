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
    public $pr_no;
    public $pr_date;
    public $sai_no;
    public $sai_date;

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
        $this->pr_no = $this->createPr->pr_no;
        $this->pr_date = $this->createPr->pr_date;
        $this->sai_no = $this->createPr->sai_no;
        $this->sai_date = $this->createPr->sai_date;
    }

    public function updatePr()
    {
        $this->validate([
            'status' => 'required|in:denied,approved,pending',
            'approvedBy' => 'required_if:status,approved',
            'approvedDesignation' => 'required_if:status,approved',
            'pr_no' => 'nullable|unique:purchase_requests,pr_no,' . $this->createPr->purchaseRequest->id,
            'sai_no' => 'nullable|unique:create_prs,sai_no,' . $this->createPr->id,
            'note' => 'nullable',
        ]);

        $this->createPr->purchaseRequest->status = $this->status;
        $this->createPr->purchaseRequest->pr_no = $this->pr_no;
        $this->createPr->purchaseRequest->save();

        $this->createPr->approved_by = $this->approvedBy;
        $this->createPr->approved_designation = $this->approvedDesignation;
        $this->createPr->note = $this->note;
        $this->createPr->pr_no = $this->pr_no;
        $this->createPr->pr_date = $this->pr_date;
        $this->createPr->sai_no = $this->sai_no;
        $this->createPr->sai_date = $this->sai_date;
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
