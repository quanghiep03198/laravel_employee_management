<?php
namespace App\Repositories\Base;

use Illuminate\Database\Eloquent\Model;
// use App\Repositories\Base\BaseRepositoryInterface;

abstract class BaseAbstractRepository implements BaseRepositoryInterface
{
   protected $model;

   public function __construct(Model $model)
   {
      $this->model = $model;
   }

   public function all()
   {
      return $this->model->all();
   }

   public function create($payload)
   {
      $this->model->create($payload);
   }

   public function findOneById($id)
   {
      return $this->model->firstWhere("id", "=", $id);
   }

   public function findAndUpdateById($id, $payload)
   {
      $foundRecord = $this->model->firstWhere("id", "=", $id);
      if (!isset($foundRecord)) {
         return null;
      }
      return $foundRecord->update($payload);
   }

   /**
    * Delete record by ID
    * @param int|string $id
    */
   public function findAndDeleteById($id)
   {
      $foundRecord = $this->model->firstWhere("id", "=", $id);
      if (!isset($foundRecord)) {
         return null;
      }
      return $foundRecord->delete();
   }
}
