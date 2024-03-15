<?php

namespace App\Services;

use App\Repositories\Base\SalaryRepositoryInterface;
use App\Services\Base\BaseAbstractService;
use App\Services\Interfaces\SalaryServiceInterface;

class SalaryService extends BaseAbstractService implements
   SalaryServiceInterface
{
   public function __construct(
      protected SalaryRepositoryInterface $salaryRepository
   ) {
      parent::__construct($salaryRepository);
   }
}
