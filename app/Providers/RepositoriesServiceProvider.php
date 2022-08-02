<?php

namespace App\Repositories;

use Illuminate\Support\ServiceProvider;
use App\Repositories\Contracts\StudentepositoryInterface;
use App\Repositories\StudentRepository;

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
