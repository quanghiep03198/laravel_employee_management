<?php

namespace App\Services;

use App\Repositories\Interfaces\EmployeeRepositoryInterface;
use App\Services\Base\BaseAbstractService;
use App\Services\Interfaces\EmployeeServiceInterface;

class EmployeeService extends BaseAbstractService implements
   EmployeeServiceInterface
{
   public function __construct(
      protected EmployeeRepositoryInterface $employeeRepository
   ) {
      parent::__construct($employeeRepository);
   }
}
