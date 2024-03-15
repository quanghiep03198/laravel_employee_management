<?php

namespace App\Repositories;

use App\Models\Employee;
use App\Repositories\Base\BaseAbstractRepository;
use App\Repositories\Interfaces\EmployeeRepositoryInterface;

class EmployeeRepository extends BaseAbstractRepository implements
   EmployeeRepositoryInterface
{
   public function __construct(protected Employee $employeeModel)
   {
      parent::__construct($employeeModel);
   }

   public function allWithUser()
   {
      return $this->employeeModel
         ->all()
         ->join("users", "employees.users_id", "=", "users.id");
   }
}
