<?php namespace Knack\ZeroBounce\Utilities;

class Environment {

    /**
     * Get an environment variable by key name
     *
     * @param string $key the key of the variable to lookup
     *
     * @return array|false|string
     */
    public static function get( string $key ) {
        return getenv( $key );
    }
}