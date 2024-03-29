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

    protected $message_store = 'OK';

    protected $message_update;

    protected $data = [
        'breadCrumbs' => [],
    ];

    protected $repository;

    public function __construct() {

        $this->add_base_crumb();
    }

    public function index( Request $request )
    {
        $lines = $this->repository->getPaginate(10);
        $links = str_replace('/?', '?', $lines->render());

        return view($this->base.'.list', compact('lines', 'links'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  App\Http\Requests\SharedRequest $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        $this->repository->update($id, $request->all());

        return redirect(route($this->base.'.index'))->with('message_success', $this->message_update);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  App\Http\Requests\SharedRequest $request
     * @return Response
     */
    public function store(Request $request)
    {
        $this->repository->store($request->all());

        return redirect(route($this->base.'.index'))->with('message_success', $this->message_store);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        $this->repository->destroyById($id);

        return redirect(route($this->base.'.index'))->with('message_success', $this->message_delete);
    }

    /**
     *
     * @method setView
     * Controller
     * @param unknown $view_path
     * @throws \InvalidArgumentException
     * @return \App\Http\Controllers\Controller
     */

    protected function setView( $view_path )
    {
        if ( view()->exists( $view_path ) ) {
            $this->view = $view_path;
            return $this;
        }
        if ( $this->base ) {
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

    protected function render( Request $request, $asJson = false ) {

        $reqFormat = $asJson? 'json': $request->format();
        switch ( $reqFormat ) {
            case 'html':
                $this->loadRequiredData();
                return $this->renderHtml();
                break;
            case 'json':
                return $this->renderJson();
                break;
        }

    }

    protected function add_assets( $path, $type ) {

        if ( $type === 'js' || $type === 'css' ) {
            $assets = isset($this->data['_assets'])? $this->data['_assets']: [];
            if ( isset( $assets[$type] ) ) {
                array_push( $assets[$type], $path );
            } else {
                $assets[$type] = [ $path ];
            }

            $this->setData('_assets', $assets );
        } else {
            Log::error('Unsupported asset type');
            throw new \InvalidArgumentException('Unsupported asset type: ' . $type );
        }
    }

    private function renderHtml() {
        return view( $this->view, $this->data );
    }

    private function renderJson() {
        return $this->data;
    }

    private function attachUser() {
        $this->setData('user', Auth::user() );
    }

    private function loadRequiredData() {

        $this->setTitle();
        $this->attachUser();
        $this->setData('notification', []);

    }

    private function add_base_crumb() {

        $breadCrumbs = isset( $this->data['breadCrumbs'])? $this->data['breadCrumbs']: [];

        array_unshift( $breadCrumbs, [
            'label' => trans('app.menu.home'),
            'url'   => '/'
        ] );

        $this->setData('breadCrumbs', $breadCrumbs );
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
