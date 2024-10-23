<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BankBranch extends Model
{
    use HasFactory;
    protected $fillable=['bank_id','district_id','name','routing', 'contact_no', 'email', 'address'];

    /**
     * Get the user that owns the BankBranch
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function bank()
    {
        return $this->belongsTo(Bank::class);
    }
    public function bank_branch()
    {
        return $this->belongsTo(Bank::class);
    }

}
