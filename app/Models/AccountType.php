<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AccountType extends Model
{
    use HasFactory;
    protected $fillable=[ 'name', 'loanable', 'loan_amount', 'min_balance', 'max_balance', 'max_transfer', 'max_withdrawal', 'yearly_interest'];
}
