<?php

namespace App\Repositories\Base;

abstract class BaseAbstractRepository
{
   public function __construct(protected $model)
   {
      $this->model = $model;
   }

   public function create($payload)
   {
      $this->model->create($payload);
   }

   public function findOne($filterQuery)
   {
      if (is_string($filterQuery)) {
         return $this->model->whereRaw($filterQuery)->first();
      } else {
         $this->model->where($filterQuery)->first();
      }
   }

   public function findAndUpdateById($id, $payload)
   {
      $recordToUpdate = $this->model->where("id", "=", $id);
      $updatedRecord = $recordToUpdate->update($payload);
      return $updatedRecord;
   }

   public function findOneAndDelete($filterQuery)
   {
      $recordToDelete = is_string($filterQuery)
         ? $this->model->whereRaw($filterQuery)
         : $this->model->where($filterQuery);
      $recordToDelete->delete();
      return $recordToDelete;
   }
}
