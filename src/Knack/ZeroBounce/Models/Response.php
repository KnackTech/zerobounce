<?php namespace Knack\ZeroBounce\Models;

use Carbon\Carbon;

class Response {
    public $address;

    public $status;

    public $subStatus;

    public $account;

    public $domain;

    public $didYouMean;

    public $domainAgeDays;

    public $freeEmail;

    public $mxFound;

    public $mxRecord;

    public $smtpProvider;

    public $firstname;

    public $lastname;

    public $gender;

    public $country;

    public $region;

    public $city;

    public $zipcode;

    public $processedAt;

    /**
     * Response constructor.
     *
     * @param $address
     * @param $status
     * @param $subStatus
     * @param $account
     * @param $domain
     * @param $didYouMean
     * @param $domainAgeDays
     * @param $freeEmail
     * @param $mxFound
     * @param $mxRecord
     * @param $smtpProvider
     * @param $firstname
     * @param $lastname
     * @param $gender
     * @param $country
     * @param $region
     * @param $city
     * @param $zipcode
     * @param $processedAt
     */
    public function __construct( $address, $status, $subStatus, $account, $domain, $didYouMean, $domainAgeDays, $freeEmail, $mxFound, $mxRecord, $smtpProvider, $firstname, $lastname, $gender, $country, $region, $city, $zipcode, $processedAt ) {
        $this->address       = $address;
        $this->status        = $status;
        $this->subStatus     = $subStatus;
        $this->account       = $account;
        $this->domain        = $domain;
        $this->didYouMean    = $didYouMean;
        $this->domainAgeDays = $domainAgeDays;
        $this->freeEmail     = $freeEmail;
        $this->mxFound       = $mxFound;
        $this->mxRecord      = $mxRecord;
        $this->smtpProvider  = $smtpProvider;
        $this->firstname     = $firstname;
        $this->lastname      = $lastname;
        $this->gender        = $gender;
        $this->country       = $country;
        $this->region        = $region;
        $this->city          = $city;
        $this->zipcode       = $zipcode;
        $this->processedAt   = Carbon::parse($processedAt);
    }


}