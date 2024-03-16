<?php

namespace App\Http\Controllers;

use App\Http\Requests\EmployeeRequest;
use App\Services\Interfaces\EmployeeServiceInterface;

class EmployeeController extends Controller
{
   protected $stopOnFirstFailure = true;
   protected $employeeService;

   public function __construct(EmployeeServiceInterface $employeeService)
   {
      $this->employeeService = $employeeService;
   }

   public function index()
   {
      return view("employee.index");
   }

   public function getAddEmployeeView()
   {
      return view("employee.add");
   }

   public function addEmployee(EmployeeRequest $request)
   {
      $validated = $request->validated();
      $this->employeeService->create($validated);
      return redirect()->route("view.employee.list");
   }

   public function allEmployees()
   {
      $employees = $this->employeeService->all();
      return response()->json($employees);
   }

   public function updateEmployee(int $id, EmployeeRequest $request)
   {
      $validated = $request->validated();
      $this->employeeService->findAndUpdateById($id, $validated);
      return redirect()->route("employee.list");
   }

   public function removeEmployee(int $id)
   {
      $this->employeeService->findAndDeleteById($id);
      return redirect()->route("employee.list");
   }
}
