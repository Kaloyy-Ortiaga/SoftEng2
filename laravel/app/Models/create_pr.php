<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class create_pr extends Model
{
    protected $fillable =[
        'stock_no',
        'unit',
        'item_description',
        'quantity',
        'unit_cost',
        'amount',
        'department',
        'pr_no',
        'pr_date',
        'section',
        'sai_no',
        'sai_date',
        'requested_by',
        'designation',
        'purpose',
    ];
    use HasFactory;
}
