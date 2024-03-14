<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SallaryModel extends Model
{
   use HasFactory;

   protected $fillable = ["employee_id", "salary_amount", "effective_date"];
}
