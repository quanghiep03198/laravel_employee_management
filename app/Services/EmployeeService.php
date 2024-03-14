<?php

namespace App\Services;

use App\Repositories\EmployeeRepository;

class EmployeeService
{
   public function __construct(protected EmployeeRepository $employeeRepository)
   {
   }

   public function addEmployee(array $payload): mixed
   {
      return $this->employeeRepository->create($payload);
   }

   public function updateEmployeeById($id, $payload)
   {
      return $this->employeeRepository->updateEmployeeById($id, $payload);
   }

   public function removeEmployeeById($id)
   {
      return $this->employeeRepository->removeEmployee($id);
   }
}
