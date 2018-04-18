<?php

namespace Stomadmin\Providers;

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
        'Stomadmin\Model' => 'Stomadmin\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        Gate::define('view-user', function($user){
            return $user->isAdmin();
        });

        Gate::define('view-users', function($user){
            return $user->isAdmin();
        });

        Gate::define('view-admin-panel', function($user){
            if($user->isAdmin()){
                return true;
            }
            else{
                return false;
            }
        });
    }
}
