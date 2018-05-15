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

        /* Role-based control panels */
        Gate::define('view-admin-panel', function($user){
            return $user->isAdmin();
        });

        Gate::define('view-secretary-panel', function($user){
            return $user->isSecretary();
        });

        Gate::define('view-doctor-panel', function($user){
            return $user->isDoctor();
        });

        Gate::define('view-user-panel', function($user){
            return $user->isUser();
        });

        /* User gates */
        Gate::define('view-user', function($user){
            return $user->isAdmin();
        });

        Gate::define('view-users', function($user){
            return $user->isAdmin();
        });

        Gate::define('view-create-user-panel', function($user){
            return $user->isAdmin();
        });

        Gate::define('store-user', function($user){
            return $user->isAdmin();
        });

        Gate::define('edit-user', function($user){
            return $user->isAdmin();
        });

        /* Appointment gates */
        Gate::define('view-appointments', function($user){
            if($user->isAdmin() || $user->isSecretary() || $user->isDoctor()){
                return true;
            }
            else{
                return false;
            }
        });

        Gate::define('edit-appointment', function($user){
            return $user->isAdmin();
        });

        /* Medical untis gates */
        Gate::define('view-medical-units', function($user){
            if($user->isAdmin() || $user->isSecretary() || $user->isDoctor()){
                return true;
            }
            else{
                return false;
            }
        });

        Gate::define('view-medical-unit', function($user){
            if($user->isAdmin() || $user->isSecretary() || $user->isDoctor()){
                return true;
            }
            else{
                return false;
            }
        });

        Gate::define('store-unit', function($user){
            return $user->isAdmin();
        });

        Gate::define('edit-unit', function($user){
            return $user->isAdmin();
        });

        /* Refferal gates */
        Gate::define('create-referral', function($user){
            if($user->isAdmin() || $user->isDoctor() || $user->isSecretary()){
                return true;
            }
            else{
                return false;
            }
        });

        /* Refferal gates */
        Gate::define('view-interventions', function($user){
            return $user->isAdmin();
        });
    }
}
