<?php

use GuzzleHttp\Client;
use Knack\ZeroBounce\Exceptions\EmptyAPIKeyException;
use Knack\ZeroBounce\Exceptions\ResponseException;
use Knack\ZeroBounce\Utilities\Environment;

class ZeroBounceAPI {
    private $client;

    private $key;

    private $baseUrl = 'https://api.zerobounce.net/v2/';

    public function __construct( $key ) {
        $this->key    = $key;
        $this->client = new Client();
    }

    /**
     * This function is used for authentication and HTTP API calls.
     *
     * @param $method
     * @param array $params
     *
     * @return mixed
     */
    private function apiCall( $method, array $params ): array {
        if(empty($this->key)) {
            throw new EmptyAPIKeyException( 'Invalid ZeroBounce API key' );
        }

        $params['api_key'] = $this->key;
        $paramsURI         = http_build_query( $params );
        $url               = "{$this->baseUrl}{$method}?{$paramsURI}";

        $response = $this->client->get( $url ,[
            'timeout' => Environment::get( 'ZEROBOUNCE_HTTP_TIMEOUT' ) || 3
        ]);

        if ( $response->getStatusCode() === 200 ) {
            return json_decode( $response->getBody(), true );
        }

        throw new ResponseException( $response['error'], 2 );
    }

    /**
     * Wrapper for apiCall/getCredits
     */
    public function getCredits() {
        return $this->apiCall( 'getcredits', [] );
    }

    /**
     * Wrapper for apiCall/validate
     *
     * @param $email
     * @param $ip
     *
     * @return array|mixed
     */
    public function validate( $email, $ip ) {
        return $this->apiCall( 'validate', [
            'email'      => $email,
            'ip_address' => $ip
        ] );
    }
}