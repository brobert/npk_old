<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;

class MainController extends Controller {

    protected $base = 'main';

    public function __construct( ) {
        parent::__construct();
    }

    public function index( Request $request ) {

        $this->setData('debug', [
            'get_class_vars( $request)'        => get_class_vars( $request),
            'get_class_methods( $request )' => get_class_methods( $request ),
        ]);

        $this->setData('request_d', [
            'format' => $request->format(),
            'getMethod' => $request->getMethod(),
            'isJson' => $request->isJson(),
        ] );


        $this->setView('index');
        return $this->render( $request );
    }
}
