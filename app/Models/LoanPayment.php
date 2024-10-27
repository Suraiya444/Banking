<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LoanPayment extends Model
{
    use HasFactory;
    protected $fillable=['customer_id', 'loan_id','customer_account_id','payment_number', 'balance', 'amount', 'principal_amount', 'interest_amount', 'status', 'expected_date', 'pay_date'];

    
    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }
    public function loan()
    {
        return $this->belongsTo(Loan::class);
    }
    public function customer_account()
    {
        return $this->belongsTo(CustomerAccount::class);
    }

}
