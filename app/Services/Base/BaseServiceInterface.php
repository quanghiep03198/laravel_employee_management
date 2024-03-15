<?php

namespace App\Services\Base;

interface BaseServiceInterface
{
   public function all();
   public function findOneById($id);
   public function create($payload);
   public function findAndUpdateById($id, $payload);
   public function findAndDeleteById($id);
}
