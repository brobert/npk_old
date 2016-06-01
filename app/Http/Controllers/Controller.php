<?php

namespace App\Http\Controllers;

use Auth;
use Config;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesResources;

use Illuminate\Http\Request;

class Controller extends BaseController {
    use AuthorizesRequests, AuthorizesResources, DispatchesJobs, ValidatesRequests;

    protected $base = false;

    protected $view = false;

    protected $data = [];

    public function __construct() {

    }

    protected function set_view( $view_path )
    {
        if ( $this->base )
        {
            $view_path = $this->base . '.' . $view_path;
        }

        if ( ! view()->exists( $view_path ) ) {
            throw new \InvalidArgumentException('View not found: ' . $view_path );
        }
        $this->view = $view_path;
        return $this;
    }

    protected function setData( $key, $data ) {
        $this->data[$key] = $data;
    }

    protected function render( Request $request ) {

        switch ( $request->format()) {
            case 'html':
                $this->loadRequiredData();
                return $this->renderHtml();
                break;
            case 'json':
                return $this->renderJson();
                break;
        }

    }

    private function renderHtml() {
        return view( $this->view, $this->data );
    }

    private function renderJson() {
        return [
            'data' => $this->data,
        ];
    }

    private function attachUser() {
        $this->setData('user', Auth::user() );
    }

    private function loadRequiredData() {

        $this->setTitle();
        $this->attachUser();
        $this->setData('notification', []);
        $this->addBreadcrumb( trans('app.menu.home'), '/');
    }

    protected function addBreadcrumb( $label, $url = false ) {
        $breadCrumbs = isset( $this->data['breadCrumbs'])? $this->data['breadCrumbs']: [];

        array_push( $breadCrumbs, [
            'label' => $label,
            'url'   => $url
        ] );
        $this->setData('breadCrumbs', $breadCrumbs );
    }

    protected function setTitle() {
        $this->setData('title', Config::get('app.title', 'Niepubliczne Przedszkole "Krasnal"') );
    }
}
