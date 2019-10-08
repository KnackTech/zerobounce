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
namespace Knack\ZeroBounce\API;

require_once 'ZeroBounceAPI.php';

use Exception;
use Knack\ZeroBounce\Exceptions\ZeroBounceException;
use Knack\ZeroBounce\Models\Response;
use ZeroBounceAPI;

/**
 * Class ZeroBounceService
 *
 * @category Providers
 * @package  Knack\ZeroBounce\API
 * @author   Doug Woodrow <doug@joinknack.com>
 * @license  https://github.com/KnackTech/zerobounce/blob/develop/LICENSE MIT License
 * @link     https://joinknack.com
 */
class ZeroBounce
{
    private $_zeroBounceAPI;

    /**
     * ZeroBounce constructor.
     *
     * @param string $apiKey API key to init with
     */
    public function __construct(string $apiKey)
    {
        $this->_zeroBounceAPI = new ZeroBounceAPI($apiKey);
    }

    /**
     * Validates an email address, optionally passed with an IP Address
     * to verify the email address against.
     *
     * @param string $emailAddress email address to validate
     * @param string $ipAddress    IP address to co-validate
     *
     * @throws ZeroBounceException
     * @return Response
     */
    public function validate(string $emailAddress, string $ipAddress = ''): Response
    {
        try {
            $validation = $this->_zeroBounceAPI->validate($emailAddress, $ipAddress);

            $response = new Response(
                $validation['address'],
                $validation['status'],
                $validation['sub_status'],
                $validation['account'],
                $validation['domain'],
                $validation['did_you_mean'],
                $validation['domain_age_days'],
                $validation['free_email'],
                $validation['mx_found'],
                $validation['mx_record'],
                $validation['smtp_provider'],
                $validation['firstname'],
                $validation['lastname'],
                $validation['gender'],
                $validation['country'],
                $validation['region'],
                $validation['city'],
                $validation['zipcode'],
                $validation['processed_at']
            );

            return $response;
        } catch (Exception $e) {
            throw new ZeroBounceException($e->getMessage(), $e->getCode());
        }
    }

    /**
     * Get the account credits available to be used.
     *
     * @return int
     */
    public function getAccountCredits(): int
    {
        try {
            return $this->_zeroBounceAPI->getCredits()['Credits'];
        } catch (Exception $e) {
            throw new ZeroBounceException($e->getMessage(), $e->getCode());
        }
    }
}
