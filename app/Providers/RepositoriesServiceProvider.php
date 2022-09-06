<?php

namespace App\Providers;


use App\Repositories\StudentRepositoryInterface;
use App\Repositories\StudentRepository;
use Illuminate\Support\ServiceProvider;

class RepositoriesServiceProvider extends ServiceProvider {

    protected $classes = [

        StudentRepositoryInterface::class => StudentRepository::class

    ];


    public function register()
    {
        foreach ($this->classes as $interface => $implementation) {
            $this->app->singleton($interface, $implementation);
        }
    }

    /**
     * @return array
     */
    public function provides()
    {
        return array_keys($this->classes);
    }
}
