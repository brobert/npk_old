<?php namespace App\Libraries\FormBuilder;

use \Illuminate\Html\FormBuilder as IlluminateFormBuilder;

class FormBuilder extends IlluminateFormBuilder {

    public function text($name, $value = null, $options = array())
    {
        $options = $options + array('id'=>"field-{$name}");

        return $this->input('text', $name, $value, $options);
    }

}