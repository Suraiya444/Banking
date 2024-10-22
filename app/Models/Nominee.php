<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nominee extends Model
{
    use HasFactory;
    protected $fillable=['customer_id','customer_accounts_id','name','dob','image','pre_address','per_address','per_address','nid','birth_certificate','relation','second_name','second_nid',' second_relation','second_per_address'];
}
