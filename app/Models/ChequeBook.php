<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ChequeBook extends Model
{
    use HasFactory;
    protected $fillable=['customer_id','customer_account_id','no_of_pages','first_leaf_no','last_leaf_no','status'];
}
