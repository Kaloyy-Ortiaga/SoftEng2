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
        // Array of department options
        $departments = ['CHASS', 'CET', 'CN', 'CS', 'CISTM'];

        // Array of status options
        $statuses = ['approved', 'pending'];

        // Loop to generate 30 entries
        for ($i = 0; $i < 30; $i++) {
            // Generate a random department and status for each entry
            $department = $departments[rand(0, 4)];
            $status = $statuses[rand(0, 1)];

            // Generate PR number incrementally
            $pr_no = 'PR-' . str_pad(($i + 1), 3, '0', STR_PAD_LEFT);

            // Generate a date incrementally starting from '2023-06-01'
            $date_created = date('Y-m-d', strtotime("2023-06-01 +$i days"));

            // Create purchase request entry
            purchase_request::create([
                'date_created' => $date_created,
                'pr_no' => $pr_no,
                'department' => $department,
                'status' => $status,
            ]);
        }
    }
}
