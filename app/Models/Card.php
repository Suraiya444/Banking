<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Card extends Model
{
    use HasFactory;
    protected $fillable=['card_catagories_id','customer_id','customer_account_id','account_type_id','customer_type','status'];
}
