<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EmployeeRequest extends FormRequest
{
   /**
    * Determine if the user is authorized to make this request.
    */
   public function authorize(): bool
   {
      return true;
   }

   /**
    * Get the validation rules that apply to the request.
    *
    * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
    */
   public function rules(): array
   {
      // dd(1);

      return [
         "user_id" => ["bail", "integer", "required"],
         "first_name" => ["bail", "string", "required"],
         "last_name" => ["string", "required"],
         "gender" => ["bail", "string"],
         "indentity_number" => [
            "string",
            "required",
            // "unique:employee,indentity_number,except,id",
         ],
         "department_id" => ["string", "required"],
         "position_id" => ["string", "required"],
         "employee_code" => [
            "string",
            "required",
            // "unique:employee,employee_code,except,id",
         ],
         "hire_date" => ["date", "required"],
         "address" => ["string", "required"],
         "address_district" => ["string", "required"],
         "address_province" => ["string", "required"],
      ];
   }
}
