<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;
    protected $fillable=['bank_id', 'bank_branch_id', 'name', 'father_name', 'mother_name', 'contact_no', 'nid', 'image','nid_image','nid_image_back','email', 'per_address', 'pre_address', 'dob', 'gender', 'ref_id', 'income','occupation', 'balance'];

    public function bank()
    {
        return $this->belongsTo(Bank::class);
    }
    public function bank_branch()
    {
        return $this->belongsTo(BankBranch::class);
    }

}

