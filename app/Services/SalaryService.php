<?php

namespace App\Services;

use App\Repositories\Base\SalaryRepositoryInterface;
use App\Services\Interfaces\SalaryServiceInterface;

class SalaryService implements SalaryServiceInterface
{
   public function __construct(
      protected SalaryRepositoryInterface $salaryRepository
   ) {
   }

   public function createEmployeeSalary($payload)
   {
      return $this->salaryRepository->create($payload);
   }
}
