<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PurchaseOrder extends Model
{
    use HasFactory;
    
    protected $table = 'purchase_orders';

    protected $fillable = [
        'supplier',
        'tel_no',
        'po_date',
        'address',
        'tin',
        'mop',
        'po_auth',
        'po_authPos',
        'po_cfa',
        'po_cfapos',
        'po_status',
        'po_word',
        'po_place',
        'po_dateod',
        'po_validity',
        'po_term',
        'po_number'
    ];

    public function createPr()
    {
        return $this->belongsTo(create_pr::class, 'id', 'id');
    }
}
