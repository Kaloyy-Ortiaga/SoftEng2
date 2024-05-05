<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\purchase_request;
use Illuminate\Database\Seeder;

class PurchaseRequestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        purchase_request::create([
            'date_created' => '2023-06-01',
            'pr_no' => 'PR-001',
            'department' => 'CHASS',
            'status' => 'pending',
        ]);

        purchase_request::create([
            'date_created' => '2023-06-02',
            'pr_no' => 'PR-002',
            'department' => 'CET',
            'status' => 'approved',
        ]);
    }
}
