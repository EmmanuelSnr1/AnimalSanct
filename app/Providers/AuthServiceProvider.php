<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        //Staff permission to manage users
        Gate::define('manage-users',function($user){
            return $user->hasRole('staff');

        });
        //Staff permission to create animal records
        Gate::define('create-animal-record',function($user){
            return $user->hasRole('staff');

        });

        //Staff perssions to edit users
        Gate::define('edit-users',function($user){
            return $user->hasRole('staff');

        });
        //Staff perssions to delete users
        Gate::define('delete-users',function($user){
            return $user->hasRole('staff');

        });
        //Staff perssions to approve adoption requests
        Gate::define('approve-adoption-request',function($user){
            return $user->hasRole('staff');

        });
        //Public users perssions to make adoption requests
        Gate::define('make-adoption',function($user){
            return $user->hasRole('public');

        });
        //Public users perssions to view adoption requests
        Gate::define('view-adoption-request',function($user){
            return $user->hasRole('public');

        });
    }
}
