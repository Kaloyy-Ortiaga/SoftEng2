<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\purchase_request;
use App\Models\create_pr;
use App\Models\PrsItem;

class CreatePr extends Component
{
    public $layout = 'layouts.app';
    public $createPr;
    public $department;
    public $pr_no;
    public $pr_date;
    public $section;
    public $sai_no;
    public $sai_date;
    public $requested_by;
    public $designation;
    public $purpose;
    public $newStatus;
    public $prsItems = [];

    protected $rules = [
        'department' => 'required',
        'section' => 'required',
        'requested_by' => 'required',
        'designation' => 'required',
        'purpose' => 'required',
        'pr_no' => 'nullable|unique:purchase_requests',
        'sai_no' => 'nullable|unique:create_prs',
    ];

    protected $messages = [
        'department.required' => 'The department field is required.',
        'pr_no.required' => 'The PR No. field is required.',
        'pr_no.unique' => 'The PR No. already exists.',
        'pr_date.required' => 'The PR Date field is required.',
        'pr_date.date' => 'The PR Date must be a valid date.',
        'section.required' => 'The section field is required.',
        'sai_no.required' => 'The SAI No. field is required.',
        'sai_no.unique' => 'The SAI No. already exists.',
        'sai_date.required' => 'The SAI Date field is required.',
        'sai_date.date' => 'The SAI Date must be a valid date.',
        'requested_by.required' => 'The requested by field is required.',
        'designation.required' => 'The designation field is required.',
        'purpose.required' => 'The purpose field is required.',
    ];

    public function mount()
    {
        if (empty($this->prsItems)) {
            $this->prsItems = [
                ['stock_no' => '', 'unit' => '', 'item_description' => '', 'quantity' => '', 'unit_cost' => '']
            ];
        }
    }

    public function addRow()
    {
        if (is_array($this->prsItems)) {
            $this->prsItems[] = ['stock_no' => '', 'unit' => '', 'item_description' => '', 'quantity' => '', 'unit_cost' => ''];
        } else {
            $this->prsItems = [
                ['stock_no' => '', 'unit' => '', 'item_description' => '', 'quantity' => '', 'unit_cost' => '']
            ];
        }
    }

    public function deleteRow($index)
    {
        if (is_array($this->prsItems) && count($this->prsItems) > 1) {
            unset($this->prsItems[$index]);
            $this->prsItems = array_values($this->prsItems);
        } elseif (is_array($this->prsItems) && count($this->prsItems) === 1) {
            $this->resetRow(0);
        }
    }

    public function resetRow($index)
    {
        if (is_array($this->prsItems)) {
            $this->prsItems[$index] = ['stock_no' => '', 'unit' => '', 'item_description' => '', 'quantity' => '', 'unit_cost' => ''];
        }
    }

    public function cancel()
    {
        $this->prsItems = [];
        $this->reset();
    }

    public function calculateTotalAmount()
    {
        return $this->prsItems()->sum('amount');
    }

    public function assignItemNumbers($createPrId)
    {
        $prsItems = PrsItem::where('create_pr_id', $createPrId)->get();

        foreach ($prsItems as $index => $item) {
            $item->item_no = $index + 1;
            $item->save();
        }
    }
    public function submit()
    {
        $this->validate();

        $purchaseRequest = purchase_request::create([
            'date_created' => now(),
            'pr_no' => $this->pr_no,
            'department' => $this->department,
            'status' => 'pending',
        ]);

        $createPr = create_pr::create([
            'purchase_request_id' => $purchaseRequest->id,
            'department' => $this->department,
            'pr_no' => $this->pr_no,
            'pr_date' => $this->pr_date,
            'section' => $this->section,
            'sai_no' => $this->sai_no,
            'sai_date' => $this->sai_date,
            'requested_by' => $this->requested_by,
            'designation' => $this->designation,
            'purpose' => $this->purpose,
            'approved_by' => null,
            'approved_designation' => null,
            'note' => null,
        ]);

        foreach ($this->prsItems as $item) {
            $unit_cost = !empty($item['unit_cost']) ? floatval($item['unit_cost']) : 0.0;

            PrsItem::create([
                'create_pr_id' => $createPr->id,
                'stock_no' => $item['stock_no'],
                'unit' => $item['unit'],
                'item_description' => $item['item_description'],
                'quantity' => intval($item['quantity']),
                'unit_cost' => $unit_cost,
                'amount' => intval($item['quantity']) * $unit_cost,
            ]);
        }

        $this->assignItemNumbers($createPr->id);

        $this->prsItems = [
            ['stock_no' => '', 'unit' => '', 'item_description' => '', 'quantity' => '', 'unit_cost' => ''],
        ];
        $this->reset();

        return redirect()->route('purchase-order');
    }

    public function render()
    {
        return view('livewire.create-pr');
    }
}
