<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class AccountController extends Controller
{
    protected $base = 'account';
    public function __controller() {
        parent::__construct();
    }

    public function index( Request $request ) {
        $this->setView('index');
        return $this->render($request);
    }
}
