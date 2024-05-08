<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\purchase_request;
use App\Models\create_pr;
use App\Models\PrsItem;

class CreatePr extends Component
{
    public $department;
    public $pr_no;
    public $pr_date;
    public $section;
    public $sai_no;
    public $sai_date;
    public $requested_by;
    public $designation;
    public $purpose;
    public $prsItems;

    protected $rules = [
        'department' => 'required',
        'pr_no' => 'required|unique:purchase_requests',
        'pr_date' => 'required|date',
        'section' => 'required',
        'sai_no' => 'required',
        'sai_date' => 'required|date',
        'requested_by' => 'required',
        'designation' => 'required',
        'purpose' => 'required',
    ];

    public function mount()
    {
        $this->prsItems = [
            ['stock_no' => '', 'unit' => '', 'item_description' => '', 'quantity' => '', 'unit_cost' => '']
        ];
    }

    public function addRow()
    {
        $this->prsItems[] = ['stock_no' => '', 'unit' => '', 'item_description' => '', 'quantity' => '', 'unit_cost' => ''];
    }

    public function deleteRow($index)
    {
        if (count($this->prsItems) > 1) {
            unset($this->prsItems[$index]);
            $this->prsItems = array_values($this->prsItems);
        } else {
            $this->resetRow($index);
        }
    }

    public function resetRow($index)
    {
        $this->prsItems[$index] = ['stock_no' => '', 'unit' => '', 'item_description' => '', 'quantity' => '', 'unit_cost' => ''];
    }

    public function cancel()
    {
        $this->prsItems = [
            ['stock_no' => '', 'unit' => '', 'item_description' => '', 'quantity' => '', 'unit_cost' => '']
        ];
        $this->reset();
    }

    public function submit()
    {
        $this->validate();

        $purchaseRequest = purchase_request::create([
            'date_created' => $this->pr_date,
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
                'quantity' => $item['quantity'],
                'unit_cost' => $item['unit_cost'],
                'amount' => $item['quantity'] * $item['unit_cost'],
            ]);
        }

        $this->prsItems = [
            ['stock_no' => '', 'unit' => '', 'item_description' => '', 'quantity' => '', 'unit_cost' => '']
        ];
        $this->reset();
    }

    public function render()
    {
        return view('livewire.create-pr');
    }
}