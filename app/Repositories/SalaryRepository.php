<?php

namespace App\Repositories;

use App\Models\SallaryModel;
use App\Repositories\Base\BaseAbstractRepository;

/**
 * 
 */
class SalaryRepository extends BaseAbstractRepository
{
   public function __construct(protected SallaryModel $salaryModel)
   {
      parent::__construct($salaryModel);
   }
}
