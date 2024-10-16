<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LoanPayment extends Model
{
    use HasFactory;
    protected $fillable=['customer_id', 'loan_id', 'payment_number', 'balance', 'amount', 'principal_amount', 'interest_amount', 'status', 'expected_date', 'pay_date'];
}
