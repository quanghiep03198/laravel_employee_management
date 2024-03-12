<?php

namespace App\Providers;

use App\Repositories\Base\SalaryRepositoryInterface;
use App\Repositories\EmployeeRepository;
use App\Repositories\SalaryRepository;
use EmployeeRepositoryInterface;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }



    public function registerRepository()
    {
        $this->app->singleton(EmployeeRepositoryInterface::class, EmployeeRepository::class);
        $this->app->singleton(SalaryRepositoryInterface::class, SalaryRepository::class);
    }

    public function registerService()
    {
        $this->app->singleton(EmployeeService::class);
        
        $this->app->singleton()
    }
}