<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Loan extends Model
{
    use HasFactory;
    protected $fillable=['customer_id', 'customer_account_id', 'start_date', 'term_length', 'interest_rate', 'principal_amount', 'amount_with_interest', 'fine', 'total_paid'];
}
