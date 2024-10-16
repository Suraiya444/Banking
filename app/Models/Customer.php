<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;
    protected $fillable=['bank_id', 'bank_branch_id', 'name', 'father_name', 'mother_name', 'contact_no', 'nid', 'email', 'per_address', 'pre_address', 'dob', 'gender', 'ref_id', 'education', 'balance'];
}
