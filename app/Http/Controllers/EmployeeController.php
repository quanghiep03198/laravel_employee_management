<?php

namespace App\Http\Controllers;

use App\Services\EmployeeService;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    //
    public function __construct(protected EmployeeService $employeeService)
    {
    }

    public function index()
    {
        return view('employee.employee-list');
    }

    public function addEmployee(Request $request){
        // $validator = $request->validate()
        // $newEmployee = $this->employeeService->addEmployee();
    }
}