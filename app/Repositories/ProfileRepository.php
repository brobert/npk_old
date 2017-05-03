<?php namespace App\Repositories;

use App\User;

class ProfileRepository extends ResourceRepository {

    /**
     * Create MenuRepository instance.
     *
     * @param  App\Models\Period  $period
     * @return void
     */
    public function __construct(User $user) {
        $this->model = $user;
    }

    /**
     * Get user by id.
     *
     * @return Illuminate\Support\Collection
     */
    public function getById($id) {
        return $this->model->find($id);
    }

}