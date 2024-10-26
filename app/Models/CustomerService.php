<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CustomerService extends Model
{
    use HasFactory;
    protected $fillable=['customer_id', 'bank_service_id', 'status', 'active_date'];

    public function Customer()
    {
        return $this->belongsTo(Customer::class);
    }
    public function bank_service()
    {
        return $this->belongsTo(BankService::class);
    }

}
