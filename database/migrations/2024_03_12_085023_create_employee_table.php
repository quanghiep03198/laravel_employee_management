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
      Schema::create("employee", function (Blueprint $table) {
         $table->id();
         $table->timestamps();
         $table->integer("user_id");
         $table->string("first_name");
         $table->string("last_name");
         $table->enum("gender", ["male", "female"]);
         $table->integer("department_id");
         $table->string("employee_code");
         $table->date("hire_date");
         $table->string("address_street");
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
