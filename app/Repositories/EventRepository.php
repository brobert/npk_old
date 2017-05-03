<?php
namespace App\Repositories;

use App\Model\Event;

class EventRepository extends ResourceRepository {

    /**
     * Create UnitRepository instance.
     *
     * @param App\Models\Theme $theme
     * @return void
     */
    public function __construct(Event $event) {
        $this->model = $event;
    }

    /**
     * getById
     * Zwraca dane jednostki dla podanego identyfkatora
     * {@inheritDoc}
     * @see \App\Repositories\ResourceRepository::getById()
     */
    public function getById( $id ) {
        return $this->model->find( $id );
    }

    public function getAll() {
        return $this->model->get();
    }
}