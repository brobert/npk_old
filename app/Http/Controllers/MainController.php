<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;

class MainController extends Controller {

    protected $base = 'main';

    public function __construct( Request $request ) {
        parent::__construct();
    }

    public function index( Request $request ) {
        $this->set_data('request', get_class_methods( $request) );

        $this->set_data('request_d', [
            'format' => $request->format(),
            'getMethod' => $request->getMethod(),
            'isJson' => $request->isJson(),
        ] );

        $this->set_view('index');
        return $this->render( $request );
    }
}
