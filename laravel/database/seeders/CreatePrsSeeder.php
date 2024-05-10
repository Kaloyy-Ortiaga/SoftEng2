<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\PrsItem;
use App\Models\create_pr;

class CreatePrsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $createPr1 = create_pr::where('pr_no', 'PR-001')->first();
        $createPr2 = create_pr::where('pr_no', 'PR-002')->first();

        PrsItem::create([
            'create_pr_id' => $createPr1->id,
            'stock_no' => '001',
            'unit' => 'pcs',
            'item_description' => 'Sample Item 1',
            'quantity' => 10,
            'unit_cost' => 100.00,
            'amount' => 1000.00,
        ]);

        PrsItem::create([
            'create_pr_id' => $createPr1->id,
            'stock_no' => '002',
            'unit' => 'pcs',
            'item_description' => 'Sample Item 2',
            'quantity' => 5,
            'unit_cost' => 200.00,
            'amount' => 1000.00,
        ]);

        PrsItem::create([
            'create_pr_id' => $createPr2->id,
            'stock_no' => '003',
            'unit' => 'pcs',
            'item_description' => 'Sample Item 3',
            'quantity' => 15,
            'unit_cost' => 150.00,
            'amount' => 2250.00,
        ]);

        // Calculate and update the total_amount for the create_pr records
        $totalAmount = PrsItem::where('create_pr_id', $createPr1->id)->sum('amount');
        $createPr1->total_amount = $totalAmount;
        $createPr1->save();

        $totalAmount = PrsItem::where('create_pr_id', $createPr2->id)->sum('amount');
        $createPr2->total_amount = $totalAmount;
        $createPr2->save();
    }
}
