<?php

namespace App\Http\Controllers\Manage;

use Illuminate\Http\Request;

use App\Models\Agency;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Repositories\AgencyRepository;

class AgencyController extends Controller {

    protected $base = 'manage.agency';

    protected $columns = ['*'];

    public function __construct( AgencyRepository $repository ) {

        $this->repository = $repository;
        $this->addBreadcrumb('Agencies', route('agency_list'));
    }

    /**
     *
     * @method index
     * AgencyController
     * @param Request $request
     */
    public function index( Request $request ) {

        $this->setView('index');
        $this->add_assets( 'backend/tables/agency.js', 'js');
        $this->add_assets( 'plugins/datatables/css/datatables.css', 'css');

        $this->setData( "agencies", Agency::select($this->columns)->get() );

        return $this->render($request);
    }

    /**
     *
     * @method edit
     * AgencyController
     * @param Request $request
     * @param unknown $id
     */
    public function edit( Request $request, $id ) {
        $this->setView('form');

        $this->setData( 'form_method', 'post' );
        $this->setData( 'form_action', route('agency_store', ['id' => $id ]) );

        $agency = Agency::find( $id );
        $this->setData( 'agency', $agency );

        $this->add_assets( '../plugins/ladda/js/ladda.js', 'js');
        $this->add_assets( '../plugins/parsley/js/parsley.js', 'js' );
        $this->add_assets( '../plugins/ladda/js/vendor/spin.js', 'js' );
        $this->add_assets( '../plugins/gritter/js/jquery.gritter.js', 'js' );

        $this->add_assets( '../plugins/gritter/css/gritter.css', 'css' );

        $this->add_assets( 'backend/forms/ajax.js', 'js' );

        $this->addBreadcrumb($agency->name, route('agency_edit', $id));

        return $this->render( $request );
    }

    /**
     *
     * @method create
     * AgencyController
     * @param Request $request
     */
    public function create ( Request $request ) {

        $this->setView('form');
        $this->setData( 'agency', new Agency() );
        $this->setData( 'form_method', 'post' );
        $this->setData( 'form_action', route('agency_create') );

        $this->add_assets( '../plugins/ladda/js/ladda.js', 'js');
        $this->add_assets( '../plugins/parsley/js/parsley.js', 'js' );
        $this->add_assets( '../plugins/ladda/js/vendor/spin.js', 'js' );
        $this->add_assets( 'backend/forms/ajax.js', 'js' );

        $this->addBreadcrumb( 'Create', route('agency_create'));

        return $this->render( $request );
    }

    public function store( Request $request, $id ) {

        $agency = Agency::find( $id );
        $agency->fill( $request->except(['_token']) );
        $res = $agency->save();
        return response()->json(['text' => $res]);
    }
}
