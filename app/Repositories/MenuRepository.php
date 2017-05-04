<?php namespace App\Repositories;

use App\Model\Menu;

class MenuRepository extends ResourceRepository {

    /**
     * Create MenuRepository instance.
     *
     * @param  App\Models\Period  $period
     * @return void
     */
    public function __construct(Menu $menu) {
        $this->model = $menu;
    }

    /**
     * Get Period by id with themes.
     *
     * @return Illuminate\Support\Collection
     */
    public function getById($id) {
        return $this->model->find($id);
    }

    public function get_nearest_menu($param) {
        return $this->model->get_nearest_menu( $param );
    }

}