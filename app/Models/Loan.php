<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Loan extends Model
{
    use HasFactory;
    protected $fillable=['loan_type_id','customer_id','customer_type_id','customer_account_id', 'start_date', 'term_length', 'interest_rate', 'principal_amount', 'amount_with_interest', 'fine', 'total_paid'];

    public function loan_type()
    {
        return $this->belongsTo(LoanType::class);
    }
    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }
    public function customer_type()
    {
        return $this->belongsTo(CustomerType::class);
    }
    public function loan_details()
    {
        return $this->hasMany(LoanDetail::class);
    }
    public function customer_account()
    {
        return $this->belongsTo(CustomerAccount::class);
    }
}
