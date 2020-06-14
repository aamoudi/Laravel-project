<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;
use Laravel\Passport\Passport;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
         'App\User' => 'App\Policies\UsersPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        Passport::routes();

        /*Gate::define('show-users',function($user){
            return $user->hasRoles(['admin','manager']);
        });
        Gate::define('add-users',function($user){

        });
        Gate::define('edit-users',function($user){
            return $user->hasRole('admin');
        });
        Gate::define('delete-users',function($user){
            return $user->hasRole('admin');
        });*/
    }
}
