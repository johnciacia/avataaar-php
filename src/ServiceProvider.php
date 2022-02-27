<?php

namespace Avataaar;

use Faker\{Factory, Generator};

/**
 * 
 */
class ServiceProvider extends \Illuminate\Support\ServiceProvider
{
    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register(): void
    {
        $this->app->singleton(Generator::class, function () {
            $faker = Factory::create();
            $faker->addProvider(new AvataaarProvider($faker));
            return $faker;
        });
    }
}