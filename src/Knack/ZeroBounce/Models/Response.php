<?php

/**
 * The Response object for ZeroBounce API validation response data.
 *
 * PHP Version 7.0
 *
 * @category Models
 * @package  Knack\ZeroBounce\Models
 * @author   Doug Woodrow <doug@joinknack.com>
 * @license  https://github.com/KnackTech/zerobounce/blob/develop/LICENSE MIT License
 * @link     https://joinknack.com
 */
namespace Knack\ZeroBounce\Models;

use Carbon\Carbon;
use Knack\ZeroBounce\Enums\GenderEnum;
use Knack\ZeroBounce\Enums\StatusEnum;
use Knack\ZeroBounce\Enums\SubStatusEnum;

/**
 * Class ZeroBounceServiceProvider
 *
 * @category Providers
 * @package  Knack\ZeroBounce\Providers
 * @author   Doug Woodrow <doug@joinknack.com>
 * @license  https://github.com/KnackTech/zerobounce/blob/develop/LICENSE MIT License
 * @link     https://joinknack.com
 */
class Response
{
    /**
     * The address part of the email
     *
     * @var string
     */
    public $address;

    /**
     * The status of the validation response
     *
     * @var StatusEnum
     */
    public $status;

    /**
     * The sub-status of the validation response
     *
     * @var SubStatusEnum
     */
    public $subStatus;

    /**
     * The account part of the email
     *
     * @var string
     */
    public $account;

    /**
     * The domain part of the email
     *
     * @var string
     */
    public $domain;

    /**
     * The did you mean email address hint
     *
     * @var string|null
     */
    public $didYouMean;

    /**
     * The age of the domain in days
     *
     * @var string|null
     */
    public $domainAgeDays;

    /**
     * If the email is a free email or not
     *
     * @var bool
     */
    public $freeEmail;

    /**
     * If an MX Record has been found for the domain
     *
     * @var bool
     */
    public $mxFound;

    /**
     * The MX Record for the domain, if present
     *
     * @var string|null
     */
    public $mxRecord;

    /**
     * The SMTP provider of the email
     *
     * @var string|null
     */
    public $smtpProvider;

    /**
     * The email address user's first name
     *
     * @var string|null
     */
    public $firstName;

    /**
     * The email address user's last name
     *
     * @var string
     */
    public $lastName;

    /**
     * The email address user's gender
     *
     * @var GenderEnum
     */
    public $gender;

    /**
     * The email address user's country, from IP address
     *
     * @var string
     */
    public $country;

    /**
     * The email address user's region, from IP address
     *
     * @var string
     */
    public $region;

    /**
     * The email address user's city, from IP address
     *
     * @var string
     */
    public $city;

    /**
     * The email address user's zip code, from IP address
     *
     * @var string
     */
    public $zipCode;

    /**
     * The time the API request was processed at
     *
     * @var Carbon
     */
    public $processedAt;

    /**
     * Response constructor.
     *
     * @param string $address       from API response
     * @param string $status        from API response
     * @param string $subStatus     from API response
     * @param string $account       from API response
     * @param string $domain        from API response
     * @param string $didYouMean    from API response
     * @param int    $domainAgeDays from API response
     * @param bool   $freeEmail     from API response
     * @param bool   $mxFound       from API response
     * @param string $mxRecord      from API response
     * @param string $smtpProvider  from API response
     * @param string $firstName     from API response
     * @param string $lastName      from API response
     * @param string $gender        from API response
     * @param string $country       from API response
     * @param string $region        from API response
     * @param string $city          from API response
     * @param string $zipCode       from API response
     * @param string $processedAt   from API response
     */
    public function __construct($address, $status, $subStatus, $account, $domain, $didYouMean, $domainAgeDays, $freeEmail, $mxFound, $mxRecord, $smtpProvider, $firstName, $lastName, $gender, $country, $region, $city, $zipCode, $processedAt)
    {
        $this->address = $address;
        $this->status = StatusEnum::from($status);
        $this->subStatus = SubStatusEnum::from($subStatus);
        $this->account = $account;
        $this->domain = $domain;
        $this->didYouMean = $didYouMean;
        $this->domainAgeDays = $domainAgeDays;
        $this->freeEmail = $freeEmail;
        $this->mxFound = $mxFound;
        $this->mxRecord = $mxRecord;
        $this->smtpProvider = $smtpProvider;
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->gender = GenderEnum::from($gender);
        $this->country = $country;
        $this->region = $region;
        $this->city = $city;
        $this->zipCode = $zipCode;
        $this->processedAt = Carbon::parse($processedAt);
    }
}
