<?php

namespace App\Providers;

use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        'App\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        Gate::define('superadmin', function($User){
            if( $User->permission == 0 ){ return true; }
        });

        Gate::define('dashboard', function($User){
            if( $User->permission == 0 ){ return true; }
            if( $User->permission == 1 ){ return true; }
            if( $User->permission == 2 ){ return true; }
        });

        Gate::define('user', function($User){
            if( $User->permission == 0 ){ return true; }
        });
    }
}


