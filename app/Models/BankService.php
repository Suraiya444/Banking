<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BankService extends Model
{
    use HasFactory;
    protected $fillable=['name', 'amount','contact_no'];
}
