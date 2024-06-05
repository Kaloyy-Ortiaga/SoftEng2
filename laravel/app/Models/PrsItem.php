<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PrsItem extends Model
{
    use HasFactory;
    
    protected $table = 'prs_items';
    
    protected $fillable = [
        'create_pr_id',
        'purchase_order_id',
        'stock_no',
        'unit',
        'item_description',
        'quantity',
        'unit_cost',
        'amount',
    ];
    
    public function createPr()
    {
        return $this->belongsTo(create_pr::class, 'create_pr_id');
    }

    public function purchaseOrder()
    {
        return $this->belongsTo(PurchaseOrder::class);
    }
}

