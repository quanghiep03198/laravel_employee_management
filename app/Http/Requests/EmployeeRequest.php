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
      return [
         "user_id" => ["bail", "integer", "required", "unique:employees"],
         "first_name" => ["bail", "string", "required"],
         "last_name" => ["bail", "string", "required"],
         "gender" => ["bail", "string"],
         "indentity_number" => ["string", "required", "unique"],
         "department_id" => ["integer", "required"],
         "position_id" => ["integer", "required"],
         "employee_code" => ["string", "required", "unique"],
         "hire_date" => ["date", "required"],
         "address_street" => ["string", "required"],
         "address_district" => ["string", "required"],
         "address_province" => ["string", "required"],
      ];
   }
}
