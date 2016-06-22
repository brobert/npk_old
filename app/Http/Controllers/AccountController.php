<?php

namespace App\Http\Controllers;

use Log;
use Auth;
use App\User;
use App\Models\Agency;
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

        // dla selektora agencji
        if ( Auth::user()->type === 'developer' ) {
            $this->setData('agencies', Agency::orderBy('name', 'asc')->get() );
        }

        return $this->render($request);
    }

    public function self_update( Request $request ) {

        $this->update_profile( $request, Auth::user()->id );
        return redirect()->action('AccountController@index');
    }

    public function update( Request $request, $id ) {

        $this->update_profile( $request, $id );
    }

    private function update_profile( Request $request, $id ) {

        $user = \App\User::find( $id );

        $user->fill( $request->all() );

        $ss_res = false;
        if ( $user->isDirty() ) {
            $ss_res = $user->save();
        }
    }
}
