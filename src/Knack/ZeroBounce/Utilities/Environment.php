<?php namespace Knack\ZeroBounce\Utilities;

use Dotenv\Dotenv;

class Environment {

    /**
     * Get an environment variable by key name
     *
     * @param string $key the key of the variable to lookup
     *
     * @return array|false|string
     */
    public static function get( string $key ) {
        if ( ! function_exists( 'getenv' ) ) {
            $dotenv = new Dotenv( __DIR__ . '/../../../../' );
            $dotenv->load();

            return getenv( $key );
        }

        return getenv( $key );
    }
}