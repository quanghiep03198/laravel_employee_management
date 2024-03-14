<?php

use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SalaryController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get("/", function () {
   return view("welcome");
});

Route::get("/dashboard", function () {
   return view("dashboard");
})
   ->middleware(["auth", "verified"])
   ->name("dashboard");

Route::middleware("auth")->group(function () {
   Route::get("/profile", [ProfileController::class, "edit"])->name(
      "profile.edit"
   );
   Route::patch("/profile", [ProfileController::class, "update"])->name(
      "profile.update"
   );
   Route::delete("/profile", [ProfileController::class, "destroy"])->name(
      "profile.destroy"
   );

   // Employee - views
   Route::get("/employees", [EmployeeController::class, "index"])->name(
      "employee.list"
   );

   Route::get("/employees/add", [
      EmployeeController::class,
      "getAddEmployeeView",
   ])->name("employee.add.view");

   // Employee - APIs
   Route::post("/employees", [EmployeeController::class, "addEmployee"])->name(
      "employee.add"
   );

   Route::patch("/employees", [
      EmployeeController::class,
      "updateEmployee",
   ])->name("employee.update");

   Route::delete("/employees", [
      EmployeeController::class,
      "removeEmployee",
   ])->name("employee.remove");

   Route::get("/departments", [DepartmentController::class, "index"])->name(
      "department.list"
   );
   Route::get("/departments", [SalaryController::class, "index"])->name(
      "salary.list"
   );
});

require __DIR__ . "/auth.php";
