<?php

namespace App\Repositories\Base;

interface BaseRespositoryInterface
{
   public function create($payload);
   public function findAndUpdateById($id, $payload);
   public function findAndDeleteById($id);
   public function findOneAndUpdate($filterQuery, $payload);
   public function findOneAndDelete($filterQuery);
   public function findOne($filterQuery);
   public function find($filterQuery);
}
