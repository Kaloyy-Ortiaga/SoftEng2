<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\create_pr;
use Illuminate\Database\Seeder;

class CreatePrSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        create_pr::create([
            'stock_no' => '001',
            'unit' => 'pcs',
            'item_description' => 'Sample Item 1',
            'quantity' => 10,
            'unit_cost' => 100.00,
            'amount' => 1000.00,
            'department' => 'CHASS',
            'pr_no' => 'PR-001',
            'pr_date' => '2023-06-01',
            'section' => 'Section A',
            'sai_no' => 'SAI-001',
            'sai_date' => '2023-06-02',
            'requested_by' => 'John Doe',
            'designation' => 'Manager',
            'purpose' => 'Sample purpose',
        ]);
    }
}
