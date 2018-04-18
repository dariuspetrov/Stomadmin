<?php

namespace Stomadmin\Policies;

use Stomadmin\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class AdminPolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function __construct()
    {
    }

    public function before($user) {
        if ($user->isAdmin()) {
            return true;
        }
    }
}
