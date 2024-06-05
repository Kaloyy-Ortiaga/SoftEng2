<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\purchase_request;
use App\Models\create_pr;
use App\Models\PrsItem;

class CreatePr extends Component
{
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
        'prsItems.*.stock_no' => 'required',
        'prsItems.*.unit' => 'required',
        'prsItems.*.item_description' => 'required',
        'prsItems.*.quantity' => 'required|numeric|min:1',
        'prsItems.*.unit_cost' => 'required|numeric|min:0.01',
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
        'prsItems.*.stock_no.required' => 'Empty field',
        'prsItems.*.unit.required' => 'Empty field',
        'prsItems.*.item_description.required' => 'Empty field',
        'prsItems.*.quantity.required' => 'Empty field',
        'prsItems.*.quantity.numeric' => 'Empty field',
        'prsItems.*.quantity.min' => 'Empty field',
        'prsItems.*.unit_cost.required' => 'Empty field',
        'prsItems.*.unit_cost.numeric' => 'Empty field',
        'prsItems.*.unit_cost.min' => 'Empty field',
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
        $this->prsItems[] = ['stock_no' => '', 'unit' => '', 'item_description' => '', 'quantity' => '', 'unit_cost' => ''];
    }

    public function deleteRow($index)
    {
        unset($this->prsItems[$index]);
        $this->prsItems = array_values($this->prsItems);
    }

    public function resetRow($index)
    {
        $this->prsItems[$index] = ['stock_no' => '', 'unit' => '', 'item_description' => '', 'quantity' => '', 'unit_cost' => ''];
    }

    public function cancel()
    {
        $this->prsItems = [];
        $this->reset();
    }

    public function calculateTotalAmount()
    {
        return array_reduce($this->prsItems, function ($carry, $item) {
            return $carry + ($item['quantity'] * $item['unit_cost']);
        }, 0);
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
            PrsItem::create([
                'create_pr_id' => $createPr->id,
                'stock_no' => $item['stock_no'],
                'unit' => $item['unit'],
                'item_description' => $item['item_description'],
                'quantity' => intval($item['quantity']),
                'unit_cost' => floatval($item['unit_cost']),
                'amount' => intval($item['quantity']) * floatval($item['unit_cost']),
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

