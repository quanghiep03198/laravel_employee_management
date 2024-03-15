<?php
namespace App\Services\Base;

use App\Repositories\Base\BaseRepositoryInterface;

abstract class BaseAbstractService implements BaseServiceInterface
{
   public function __construct(protected BaseRepositoryInterface $repository)
   {
   }

   public function all()
   {
      return $this->repository->all();
   }

   public function findOneById($id)
   {
      return $this->repository->findOneById($id);
   }

   public function create($payload)
   {
      return $this->repository->create($payload);
   }

   public function findAndUpdateById($id, $payload)
   {
      return $this->repository->findAndUpdateById($id, $payload);
   }

   public function findAndDeleteById($id)
   {
      return $this->repository->findAndDeleteById($id);
   }
}
