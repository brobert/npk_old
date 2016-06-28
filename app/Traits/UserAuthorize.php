<?php

namespace App\Traits;

trait UserAuthorize {

    private $types = ['developer', 'agency', 'admin', 'worker', 'child'];

    /**
     *
     * @method check_type
     * UserAuthorize
     * @param unknown $type
     * @return boolean
     */
    public function check_type( $type ) {

        if ( array_search( $type, $this->types) === false ) {
            return false;
        }
        return ( array_search( $type, $this->types) <= array_search( $this->type, $this->types) );
    }
}