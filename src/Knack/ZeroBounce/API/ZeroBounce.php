<?php namespace Knack\ZeroBounce\API;

require_once 'ZeroBounceAPI.php';

use Exception;
use Knack\ZeroBounce\Models\Response;
use ZeroBounceAPI;

class ZeroBounce {
    private $zeroBounceAPI;

    /**
     * ZeroBounce constructor.
     *
     * @param string $apiKey
     */
    public function __construct( string $apiKey ) {
        $this->zeroBounceAPI = new ZeroBounceAPI( $apiKey );
    }

    /**
     * Validates an email address, optionally passed with an IP Address
     * to verify the email address against.
     *
     * @param string $emailAddress
     * @param string $ipAddress
     *
     * @return Response|null
     */
    public function validate( string $emailAddress, string $ipAddress = '' ) {
        try {
            $validation = $this->zeroBounceAPI->validate( $emailAddress, $ipAddress );

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
        } catch ( Exception $e ) {
            return null;
        }
    }

    /**
     * @return int
     */
    public function getAccountCredits(): int {
        return $this->zeroBounceAPI->getCredits()['Credits'];
    }
}