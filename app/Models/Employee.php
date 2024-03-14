<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
   use HasFactory;

   /**
    * The attributes that are mass assignable.
    *
    * @var array<int, string>
    */
   protected $fillable = [
      "user_id",
      "first_name",
      "last_name",
      "gender",
      "identity_number",
      "status",
      "department_id",
      "position_id",
      "employee_code",
      "hire_date",
      "address",
      "address_district",
      "address_province",
   ];

   /**
    * The attributes that should be hidden for serialization.
    *
    * @var array<int, string>
    */
   protected $hidden = [];

   /**
    * The attributes that should be cast.
    *
    * @var array<string, string>
    */
   protected $casts = [
      "hire_date" => "datetime",
   ];
}
