<?php

namespace App\Traits;

trait UserAuthorize {

    private $types_order = [
        'child',
        'worker',
        'admin',
        'agency',
        'developer',
    ];

    public function check_type( $type ) {

        foreach ( $this->types_order as $t) {
            if ( $t === $type ) {
                return true;
            }
            if ( $t === $this->type ) {
                return;
            }
        }
        return;
    }
}