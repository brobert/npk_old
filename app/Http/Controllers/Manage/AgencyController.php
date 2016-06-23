<?php

namespace App\Http\Controllers\Manage;

use Illuminate\Http\Request;

use App\Models\Agency;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class AgencyController extends Controller {

    protected $base = 'manage.agency';
    public function index( Request $request ) {

        $this->setView('index');
        $this->add_assets( 'backend/tables/agency.js', 'js');
        $this->add_assets( 'plugins/datatables/css/datatables.css', 'css');

        return $this->render($request);
    }

    public function ajax_agency ( Request $request ) {

        $columns = ['id', 'code', 'name', 'description'];
        $agencies = Agency::select($columns)->get();

        $data = [];
        foreach ( $agencies as $agency ) {
            array_push( $data, [ $agency->id, $agency->code, $agency->name, $agency->description ]);
        }
        $this->setData( "aaData", $data );

        return $this->render( $request, true );
    }
}
