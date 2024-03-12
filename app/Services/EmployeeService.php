<?php

namespace App\Services;

use App\Repositories\EmployeeRepository;

class EmployeeService {
    public function __construct(protected EmployeeRepository $employeeRepository)
    {

    }
}