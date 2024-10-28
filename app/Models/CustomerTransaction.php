<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CustomerTransaction extends Model
{
    use HasFactory;
    protected $fillable=['customer_id', 'customer_account_id', 'trans_date', 'amount', 'trans_type', 'description'];

    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }
    public function customer_account()
    {
        return $this->belongsTo(CustomerAccount::class);
    }


}
