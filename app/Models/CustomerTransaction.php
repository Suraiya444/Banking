<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CustomerTransaction extends Model
{
    use HasFactory;
    protected $fillable=['customer_id', 'customer_account_id', 'trans_date', 'amount', 'trans_type', 'description'];
}
