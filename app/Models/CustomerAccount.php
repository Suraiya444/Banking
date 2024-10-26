<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CustomerAccount extends Model
{
    use HasFactory;
    protected $fillable=['customer_id', 'account_type_id','account_no','initial_amount','max_balance', 'max_transfer', 'max_withdrawal', 'yearly_interest', 'account_open_date', 'account_close_date', 'status'];

    public function Customer()
    {
        return $this->belongsTo(Customer::class);
    }
    public function account_type()
    {
        return $this->belongsTo(AccountType::class);
    }
}
