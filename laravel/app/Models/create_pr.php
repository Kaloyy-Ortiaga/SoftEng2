<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class create_pr extends Model
{
    use HasFactory;
<<<<<<< HEAD

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'create_prs';
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'purchase_request_id',
        'department',
        'pr_no',
        'pr_date',
        'section',
        'sai_no',
        'sai_date',
        'requested_by',
        'designation',
        'purpose',
        'total_amount',
        'approved_by',
        'approved_designation',
        'note',
    ];

    /**
     * Get the purchase request that owns the create_pr.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function purchaseRequest(): BelongsTo
    {
        return $this->belongsTo(purchase_request::class);
    }

    /**
     * Get the create_prs_items associated with the create_pr.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function prsItems(): HasMany
    {
        return $this->hasMany(PrsItem::class);
    }

=======
>>>>>>> parent of 5903152 (Merge pull request #2 from Kaloyy-Ortiaga/anotherbranch)
}
