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

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'po_date' => 'date',
        'po_dateod' => 'date',
    ];

    /**
     * Get the create_prs record associated with the purchase order.
     */
    public function createPr()
    {
        return $this->belongsTo(create_pr::class, 'id');
    }
}
