<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
   /**
    * Run the migrations.
    */
   public function up(): void
   {
      Schema::create("employees", function (Blueprint $table) {
         $table->id();
         $table->timestamps();
         $table->string("first_name");
         $table->string("last_name");
         $table->string("phone_number");
         $table->string("business_email")->unique();
         $table->string("personal_email")->unique();
         $table->enum("gender", ["male", "female"]);
         $table->string("indentity_number")->unique();
         $table->enum("status", ["working", "left"])->default("working");
         $table->integer("department_id");
         $table->integer("position_id");
         $table->string("employee_code")->uniqid();
         $table->date("hire_date");
         $table->string("address");
         $table->string("address_district");
         $table->string("address_province");
      });
   }

   /**
    * Reverse the migrations.
    */
   public function down(): void
   {
      Schema::dropIfExists("employee");
   }
};
