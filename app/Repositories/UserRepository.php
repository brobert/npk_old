<?php
namespace App\Repositories;

use App\User;

class UserRepository extends ResourceRepository {

    /**
     * Create UnitRepository instance.
     *
     * @param App\Models\Theme $theme
     * @return void
     */
    public function __construct(User $user) {
        $this->model = $user;
    }

    /**
     * getById
     * Zwraca dane jednostki dla podanego identyfkatora
     * {@inheritDoc}
     * @see \App\Repositories\ResourceRepository::getById()
     */
    public function getById( $userId ) {
        return $this->model->find( $userId );
    }

    public function getAll() {
        return $this->model->where('type', 'user')->get();
    }
}