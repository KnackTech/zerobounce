<?php namespace Knack\ZeroBounce\Models;

use Carbon\Carbon;
use Knack\ZeroBounce\Enums\GenderEnum;
use Knack\ZeroBounce\Enums\StatusEnum;
use Knack\ZeroBounce\Enums\SubStatusEnum;

class Response {

    /**
     * @var string
     */
    public $address;

    /**
     * @var StatusEnum
     */
    public $status;

    /**
     * @var SubStatusEnum
     */
    public $subStatus;

    /**
     * @var string
     */
    public $account;

    /**
     * @var string
     */
    public $domain;

    /**
     * @var string
     */
    public $didYouMean;

    /**
     * @var string
     */
    public $domainAgeDays;

    /**
     * @var bool
     */
    public $freeEmail;

    /**
     * @var bool
     */
    public $mxFound;

    /**
     * @var string
     */
    public $mxRecord;

    /**
     * @var string
     */
    public $smtpProvider;

    /**
     * @var string
     */
    public $firstname;

    /**
     * @var string
     */
    public $lastname;

    /**
     * @var GenderEnum
     */
    public $gender;

    /**
     * @var string
     */
    public $country;

    /**
     * @var string
     */
    public $region;

    /**
     * @var string
     */
    public $city;

    /**
     * @var string
     */
    public $zipcode;

    /**
     * @var Carbon
     */
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
        $this->status        = StatusEnum::from($status);
        $this->subStatus     = SubStatusEnum::from($subStatus);
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
        $this->gender        = GenderEnum::from($gender);
        $this->country       = $country;
        $this->region        = $region;
        $this->city          = $city;
        $this->zipcode       = $zipcode;
        $this->processedAt   = Carbon::parse($processedAt);
    }


}