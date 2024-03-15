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

   public function all(){
      $employees = $this->employeeModel->all()->toArray();
      $employees =  array_map(function($item){
         $item['hire_date']= date_format(date_create($item['hire_date']),"d M, Y");
         return $item;
      }, $employees);

      return $employees;


   }
}
