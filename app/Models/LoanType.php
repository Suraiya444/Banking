<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LoanType extends Model
{
    use HasFactory;
    protected $fillable=['name','interest_percentage','min_amount','max_amount','min_duration','max_duration'];
}
