<?php

use App\Repositories\Base\BaseRespositoryInterface;

interface EmployeeRepositoryInterface extends BaseRespositoryInterface
{
    public function addEmployee(mixed $payload);
    public function updateEmployeeById($id);
    public function removeEmployeeById($id);
    public function findAllEmployees();
    public function findOneEmployeeById($id);
}
