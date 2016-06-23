<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class ErrorsController extends Controller
{
    protected $base = 'errors';

    public function forbidden( Request $request) {
        $this->setView('forbidden');
        return $this->render($request);
    }
}
