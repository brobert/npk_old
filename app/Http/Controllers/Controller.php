<?php

namespace App\Http\Controllers;

use Auth;
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

    protected function set_data( $key, $data ) {
        $this->data[$key] = $data;
    }

    protected function render( Request $request ) {

        switch ( $request->format()) {
            case 'html':
                $this->attacheUser();
                return $this->render_html();
                break;
            case 'json':
                return $this->render_json();
                break;
        }

    }

    private function render_html() {
        return view( $this->view, $this->data );
    }

    private function render_json() {
        return [
            'data' => $this->data,
        ];
    }

    private function attacheUser() {

        $this->set_data('user', Auth::user() );
    }
}
