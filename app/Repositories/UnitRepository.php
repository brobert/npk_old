<?php
namespace App\Repositories;

use App\Model\Unit;

class UnitRepository extends ResourceRepository {

    /**
     * Create UnitRepository instance.
     *
     * @param App\Models\Theme $theme
     * @return void
     */
    public function __construct(Unit $unit) {
        $this->model = $unit;
    }

    /**
     * getById
     * Zwraca dane jednostki dla podanego identyfkatora
     * {@inheritDoc}
     * @see \App\Repositories\ResourceRepository::getById()
     */
    public function getById( $unitId ) {
        return $this->model->find( $unitId );
    }

    public function getAll() {
        return $this->model->get();
    }
}