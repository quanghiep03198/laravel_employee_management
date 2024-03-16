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
   return view("dashboard.index");
})
   ->middleware(["auth", "verified"])
   ->name("view.dashboard");

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
   Route::prefix("employee")->group(function () {
      Route::get("", [EmployeeController::class, "index"])->name(
         "view.employee.list"
      );
      Route::get("add", [
         EmployeeController::class,
         "getAddEmployeeView",
      ])->name("view.employee.add");
   });

   // #region Employee - APIs
   Route::prefix("api")->group(function () {
      Route::get("/employees", [
         EmployeeController::class,
         "allEmployees",
      ])->name("api.employee.list");

      Route::post("/employees", [
         EmployeeController::class,
         "addEmployee",
      ])->name("api.employee.add");

      Route::patch("/employees", [
         EmployeeController::class,
         "updateEmployee",
      ])->name("api.employee.update");

      Route::delete("/employees", [
         EmployeeController::class,
         "removeEmployee",
      ])->name("api.employee.remove");
   });
   //#endregion

   Route::get("/departments", [DepartmentController::class, "index"])->name(
      "view.department.list"
   );
});

require __DIR__ . "/auth.php";
