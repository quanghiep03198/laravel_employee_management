<?php

namespace App\Http\Controllers;

use App\Http\Requests\EmployeeRequest;
use App\Services\EmployeeService;
use Illuminate\Http\Request;
use Symfony\Component\HttpKernel\Exception\UnprocessableEntityHttpException;

class EmployeeController extends Controller
{
   protected $stopOnFirstFailure = true;
   //
   public function __construct(protected EmployeeService $employeeService)
   {
   }

   public function index()
   {
      return view("employee.list");
   }

   public function getAddEmployeeView()
   {
      // $this->employeeService->addEmployee($request->validated());
      return view("employee.add");
   }
   public function addEmployee(EmployeeRequest $request)
   {
      return redirect()->route("employee.list");
   }

   public function updateEmployee(int $id, EmployeeRequest $request)
   {
      $validated = $request->validated();

      $this->employeeService->updateEmployeeById($id, $validated);

      return redirect()->route("employee.list");
   }

   public function removeEmployee(int $id)
   {
      $this->employeeService->removeEmployeeById($id);
      return redirect()->route("employee.list");
   }
}
