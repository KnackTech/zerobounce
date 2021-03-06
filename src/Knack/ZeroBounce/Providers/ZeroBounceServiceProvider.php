<?php

/**
 * The ZeroBounce Service Provider for Laravel projects.
 *
 * PHP Version 7.0
 *
 * @category Providers
 * @package  Knack\ZeroBounce\Providers
 * @author   Doug Woodrow <doug@joinknack.com>
 * @license  https://github.com/KnackTech/zerobounce/blob/develop/LICENSE MIT License
 * @link     https://joinknack.com
 */
namespace Knack\ZeroBounce\Providers {

    use Illuminate\Support\ServiceProvider;
    use Knack\ZeroBounce\API\ZeroBounce;
    use Knack\ZeroBounce\Utilities\Environment;

    /**
     * Class ZeroBounceServiceProvider
     *
     * @category Providers
     * @package  Knack\ZeroBounce\Providers
     * @author   Doug Woodrow <doug@joinknack.com>
     * @license  https://github.com/KnackTech/zerobounce/blob/develop/LICENSE MIT License
     * @link     https://joinknack.com
     */
    class ZeroBounceServiceProvider extends ServiceProvider
    {
        /**
         * Register bindings in the container.
         *
         * @return void
         */
        public function register(): void
        {
            $this->app->singleton(
                ZeroBounce::class,
                static function ($app) {
                    return new ZeroBounce(Environment::get('ZEROBOUNCE_API_KEY'));
                }
            );
        }

        /**
         * Get the services provided by the provider.
         *
         * @return array
         */
        public function provides(): array
        {
            return [ZeroBounce::class];
        }
    }
}
