<?php namespace App\Libraries\FormBuilder;

use Illuminate\Support\Facades\Facade as IlluminateFacade;

class FormBuilderFacade extends IlluminateFacade {

    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor() { return 'FormBuilder'; }

}