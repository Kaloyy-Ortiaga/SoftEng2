<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PurchaseOrder extends Model
{
    use HasFactory;

    protected $table = 'purchase_orders';

    protected $fillable = [
        'POdate_created',
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
        'po_number',
    ];
    
    public function createPr()
    {
        return $this->belongsTo(create_pr::class, 'po_number', 'pr_no');
    }

    public function prsItems()
    {
        return $this->hasMany(PrsItem::class);
    }

    public function scopeSearch($query, $value)
    {
        $query->where('POdate_created', 'like', "%{$value}%")
              ->orWhere('supplier', 'like', "%{$value}%")
              ->orWhere('po_cfapos', 'like', "%{$value}%")
              ->orWhere('po_status', 'like', "%{$value}%")
              ->orWhere('po_number', 'like', "%{$value}%");
    }
}
