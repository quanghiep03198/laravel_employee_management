<?php

namespace App\Repositories;

use App\Models\Employee;
use App\Repositories\Base\BaseAbstractRepository;

class EmployeeRepository extends BaseAbstractRepository
{
   public function __construct(protected Employee $employeeModel)
   {
   }

   public function addEmployee(mixed $payload)
   {
      return $this->employeeModel->create($payload);
   }

   public function updateEmployeeById($id)
   {
      return $this->employeeModel->updateEmployeeById($id);
   }

   public function removeEmployee($id)
   {
      return $this->employeeModel->removeEmployeeById($id);
   }

   public function getAllEmployee()
   {
      return $this->employeeModel->findAllEmployees();
   }

   public function getOneEmployee($id)
   {
      return $this->employeeModel->findOneEmployeeById($id);
   }
}
