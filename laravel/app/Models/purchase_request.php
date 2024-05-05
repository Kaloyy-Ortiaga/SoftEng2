<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class purchase_request extends Model
{
    use HasFactory;
    protected $fillable = [
        'date_created',
        'pr_no',
        'department',
        'status',
    ];
    public function creatingPr()
    {
        return $this->hasOne(create_pr::class, 'pr_no', 'pr_no');
    }
}
