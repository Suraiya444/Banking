<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transfer extends Model
{
    use HasFactory;
    protected $fillable=['customer_id','customer_account_id','beneficiary_id','transfer_date','amount','status'];

    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }
    public function customer_account()
    {
        return $this->belongsTo(CustomerAccount::class);
    }
    public function beneficiary()
    {
        return $this->belongsTo(Beneficiary::class);
    }
    
}
