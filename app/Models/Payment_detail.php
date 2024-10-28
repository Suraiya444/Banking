<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment_detail extends Model
{
    use HasFactory;
    protected $fillable=['customer_id','customer_account_id','payment_date','payment_method','amount'];

    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }
    public function customer_account()
    {
        return $this->belongsTo(CustomerAccount::class);
    }
}
