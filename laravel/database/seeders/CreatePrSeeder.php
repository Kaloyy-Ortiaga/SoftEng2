<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\create_pr;
use Illuminate\Database\Seeder;
use App\Models\purchase_request;

class CreatePrSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $purchaseRequest1 = purchase_request::where('pr_no', 'PR-001')->first();
        $purchaseRequest2 = purchase_request::where('pr_no', 'PR-002')->first();

        create_pr::create([
            'purchase_request_id' => $purchaseRequest1->id,
            'department' => 'CHASS',
            'pr_no' => 'PR-001',
            'pr_date' => '2023-06-01',
            'section' => 'Section A',
            'sai_no' => 'SAI-001',
            'sai_date' => '2023-06-02',
            'requested_by' => 'John Doe',
            'designation' => 'Manager',
            'purpose' => 'Sample purpose',
            'approved_by' => 'Admin User', 
            'approved_designation' => 'Administrator',
            'note' => 'This purchase request has been approved.',
        ]);

        create_pr::create([
            'purchase_request_id' => $purchaseRequest2->id,
            'department' => 'CET',
            'pr_no' => 'PR-002',
            'pr_date' => '2023-06-03',
            'section' => 'Section B',
            'sai_no' => 'SAI-002',
            'sai_date' => '2023-06-04',
            'requested_by' => 'Jane Smith',
            'designation' => 'Supervisor',
            'purpose' => 'Another sample purpose',
            'approved_by' => 'Admin User', 
            'approved_designation' => 'Administrator',
            'note' => 'This purchase request has been denied.',
        ]);
    }
}
