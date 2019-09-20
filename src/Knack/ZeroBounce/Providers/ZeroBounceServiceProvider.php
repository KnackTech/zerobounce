<?php namespace Knack\ZeroBounce\Providers;

use Illuminate\Support\ServiceProvider;
use Knack\ZeroBounce\API\ZeroBounce;
use Knack\ZeroBounce\Utilities\Environment;

class ZeroBounceServiceProvider extends ServiceProvider {

    /**
     * Register bindings in the container.
     *
     * @return void
     */
    public function register() {
        $this->app->singleton( ZeroBounce::class, static function ( $app ) {
            return new ZeroBounce( Environment::get( 'ZEROBOUNCE_API_KEY' ) );
        } );
    }


    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides(): array {
        return [ ZeroBounce::class ];
    }
}