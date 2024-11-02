<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LoanDetail extends Model
{
    use HasFactory;
    protected $fillable=["loan_id", "customer_account_id", "payment_no", "loan_balance", "payment", "pricipal", "interest", "pay_date", "actual_date"];

    public function loan()
    {
        return $this->belongsTo(Loan::class);
    }
    public function customer_account()
    {
        return $this->belongsTo(CustomerAccount::class);
    }

}
