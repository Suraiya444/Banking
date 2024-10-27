<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CustomerType extends Model
{
    use HasFactory;
    protected $fillable=['customer_id','customer_account_id','account_type_id','name'];

    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }
    public function customer_account()
    {
        return $this->belongsTo(CustomerAccount::class);
    }
    public function account_type()
    {
        return $this->belongsTo(AccountType::class);
    }
}
