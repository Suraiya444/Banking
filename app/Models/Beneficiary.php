<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Beneficiary extends Model
{
    use HasFactory;
    protected $fillable=['name','account_type_id','account_no','status',' active_date'];

    public function account_type()
    {
        return $this->belongsTo(AccountType::class,'account_type_id');
    }
    
}
