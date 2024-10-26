<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Laravel\Passport\Passport;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        //
    ];

    /**
     * Register any authentication / authorization services.
     */
    public function boot(): void
    {
        Passport::tokensCan([
            'restaurant-access' => 'Restaurant Owner Access',
            'admin' => 'Administrator Access',
            'delivery' => 'Delivery Access',
            'customer' => 'Customer Access',
        ]);

        Passport::setDefaultScope([
            'restaurant-access'
        ]);
    }
}