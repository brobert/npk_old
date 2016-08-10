<?php

namespace App\Policies;

use Illuminate\Auth\Access\HandlesAuthorization;

use Log;
use App\User;
use App\Models\Agency;

class AgencyPolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    private function _check( User $user ) {
        Log::info('__________________________________________check::' . $user->type);
        return in_array( $user->type , [ 'developer', 'admin'] );
    }

    public function create(User $user, Agency $agency) {
        return $this->_check( $user );
    }

    public function store(User $user, Agency $agency) {
        return $this->_check( $user );
    }

    public function update(User $user, Agency $agency) {
        Log::info('____________________________________________ update');
        return $this->_check( $user );
    }
}
