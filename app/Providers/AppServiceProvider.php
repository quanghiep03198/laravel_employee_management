<?php

namespace App\Providers;

use App\Repositories\Base\SalaryRepositoryInterface;
use App\Repositories\EmployeeRepository;
use App\Repositories\SalaryRepository;
use App\Services\EmployeeService;
use App\Services\Interfaces\EmployeeServiceInterface;
use App\Services\Interfaces\SalaryServiceInterface;
use App\Services\SalaryService;
use EmployeeRepositoryInterface;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
   /**
    * Register any application services.
    */
   public function register(): void
   {
      $this->registerRepositories();
      $this->registerServices();
   }

   /**
    * Bootstrap any application services.
    */
   public function boot(): void
   {
      //
   }

   public function registerRepositories()
   {
      $this->app->singleton(
         EmployeeRepositoryInterface::class,
         EmployeeRepository::class
      );
      $this->app->singleton(
         SalaryRepositoryInterface::class,
         SalaryRepository::class
      );
   }

   public function registerServices()
   {
      $this->app->singleton(
         EmployeeServiceInterface::class,
         EmployeeService::class
      );
      $this->app->singleton(
         SalaryServiceInterface::class,
         SalaryService::class
      );
   }
}
