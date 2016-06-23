<?php

namespace App\Http\Controllers\Manage;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class AgencyController extends Controller {

    protected $base = 'manage.agency';
    public function index( Request $request ) {

        $this->setView('index');
        return $this->render($request);
    }
}
