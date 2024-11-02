<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LoanDetail extends Model
{
    use HasFactory;
    protected $fillable=['loan_id','customer_account_id','payment_no','loan_manage','payment','pricipal','interest'];

    public function loan()
    {
        return $this->belongsTo(Loan::class);
    }
    public function customer_account()
    {
        return $this->belongsTo(CustomerAccount::class);
    }

}
