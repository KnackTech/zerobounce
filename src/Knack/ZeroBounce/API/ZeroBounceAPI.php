<?php

/**
 * The ZeroBounce wrapper for the ZeroBounce API
 *
 * PHP Version 7.0
 *
 * @category Providers
 * @package  Knack\ZeroBounce\Providers
 * @author   Doug Woodrow <doug@joinknack.com>
 * @license  https://github.com/KnackTech/zerobounce/blob/develop/LICENSE MIT License
 * @link     https://joinknack.com
 */
use GuzzleHttp\Client;
use Knack\ZeroBounce\Exceptions\EmptyAPIKeyException;
use Knack\ZeroBounce\Exceptions\ResponseException;
use Knack\ZeroBounce\Utilities\Environment;

/**
 * Class ZeroBounceAPI
 */
class ZeroBounceAPI
{
    private $_client;

    private $_key;

    private $_baseURL = 'https://api.zerobounce.net/v2/';

    /**
     * ZeroBounceAPI constructor.
     *
     * @param string $key the API Key
     */
    public function __construct($key)
    {
        $this->_key = $key;
        $this->_client = new Client();
    }

    /**
     * This function is used for authentication and HTTP API calls.
     *
     * @param string $method the method to execute
     * @param array  $params the params to pass to the call
     *
     * @return mixed
     */
    private function _apiCall($method, array $params): array
    {
        if (empty($this->_key)) {
            throw new EmptyAPIKeyException('Invalid ZeroBounce API key');
        }

        $params['api_key'] = $this->_key;
        $paramsURI = http_build_query($params);
        $url = "{$this->_baseURL}{$method}?{$paramsURI}";

        $response = $this->_client->get(
            $url, [
            'timeout' => Environment::get('ZEROBOUNCE_HTTP_TIMEOUT', 3.0),
            ]
        );

        if ($response->getStatusCode() === 200) {
            return json_decode($response->getBody(), true);
        }

        throw new ResponseException($response['error'], 2);
    }

    /**
     * Wrapper for apiCall/getCredits
     *
     * @return array
     */
    public function getCredits(): array
    {
        return $this->_apiCall('getcredits', []);
    }

    /**
     * Wrapper for apiCall/validate
     *
     * @param string $email the email address to validate
     * @param string $ip    tge IP address to validate
     *
     * @return array|mixed
     */
    public function validate($email, $ip): array
    {
        return $this->_apiCall(
            'validate',
            [
            'email' => $email,
            'ip_address' => $ip,
            ]
        );
    }
}
