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
      Schema::create("salary", function (Blueprint $table) {
         $table->id();
         $table->timestamps();
         $table->integer("employee_id");
         $table->float("salary_amount");
         $table->date("effective_date");
      });
   }

   /**
    * Reverse the migrations.
    */
   public function down(): void
   {
      Schema::dropIfExists("salary");
   }
};
