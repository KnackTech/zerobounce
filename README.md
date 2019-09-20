Knack ZeroBounce PHP API
=====================

[ZeroBounce](https://www.zerobounce.net) PHP API v2

This is a PHP wrapper class example for the ZeroBounce API.

* TLS V1.2 is required -  This is available from PHP 5.5.19 and up.

#### Example usage:

The validation methods return objects on which you call get methods which return the relevant information. Please see the code for all getters and below for a sample:

##### Laravel
```php
<?php

use Knack\ZeroBounce\ZeroBounce;

class EmailService {

    private $zeroBounce;

    /**
     * EmailService constructor.
     *
     * @param ZeroBounce $zeroBounce
     */
    public function __construct(ZeroBounce $zeroBounce) {
        $this->zeroBounce = $zeroBounce;
    }

    /**
     * Validates an email address from blacklists and verifies that that domain is real.
     *
     * @param string $emailAddress
     * @param string $ipAddress
     *
     * @return bool
     */
    public function isValid(string $emailAddress, string $ipAddress = ''): bool
    {
        $response = $this->zeroBounce->validate($emailAddress, $ipAddress);

        if($response->status === StatusEnum::VALID) {
            return true;
        }

        return false;
    }
}
```

##### Vanilla PHP
```php
<?php

use Knack\ZeroBounce\ZeroBounce;

class EmailService {

    private $zeroBounce;

    /**
     * EmailService constructor.
     */
    public function __construct() {
        $this->zeroBounce = new ZeroBounce(getenv('ZEROBOUNCE_API_KEY'));
    }

    /**
     * Validates an email address from blacklists and verifies that that domain is real.
     *
     * @param string $emailAddress
     * @param string $ipAddress
     *
     * @return bool
     */
    public function isValid(string $emailAddress, string $ipAddress = ''): bool
    {
        $response = $this->zeroBounce->validate($emailAddress, $ipAddress);

        if($response->status === StatusEnum::VALID) {
            return true;
        }

        return false;
    }
}
```

**Properties and possible values in Response:**
`ZeroBounce::validate()` method
  
|<b>Property</b>|<b>Possible Values</b> 
|:--- |:--- 
address  | The email address you are validating. 
status | StatusEnum::class as string
subStatus  |SubStatusEnum::class as string or [null]
account | The portion of the email address before the "@" symbol.
domain | The portion of the email address after the "@" symbol.
didYouMean | Suggestive Fix for an email typo or [null]
domainAgeDays | Age of the email domain in days or [null].
freeEmail | [true/false] If the email comes from a free provider.
mxFound | [true/false] Does the domain have an MX record.
mxRecord | The preferred MX record of the domain or [null]
smtpProvider | The SMTP Provider of the email or [null] (BETA).
firstname | The first name of the owner of the email when available or [null].
lastname  |The last name of the owner of the email when available or [null].
gender |GenderEnum::class as string or [null].
country |The country the email signed up when ip address is provided or [null].
region |The region the email signed up when ip address is provided or [null].
city |The city the email signed up when ip address is provided or [null].
zipcode |The zipcode the email signed up when ip address is provided or [null].
processedAt |A Carbon instance of the time the request was processed.

`ZeroBounce::getAccountCredits()` method
  
|<b>Property</b>|<b>Possible Values</b> 
|:--- |:--- 
credits  | The number of credits left in account for email validation.

**Any of the following email addresses can be used for testing the API, no credits are charged for these test email addresses:**
- disposable@example.com
- invalid@example.com
- valid@example.com
- toxic@example.com
- donotmail@example.com
- spamtrap@example.com
- abuse@example.com
- unknown@example.com
- catch_all@example.com
- antispam_system@example.com
- does_not_accept_mail@example.com
- exception_occurred@example.com
- failed_smtp_connection@example.com
- failed_syntax_check@example.com
- forcible_disconnect@example.com
- global_suppression@example.com
- greylisted@example.com
- leading_period_removed@example.com
- mail_server_did_not_respond@example.com
- mail_server_temporary_error@example.com
- mailbox_quota_exceeded@example.com
- mailbox_not_found@example.com
- no_dns_entries@example.com
- possible_trap@example.com
- possible_typo@example.com
- role_based@example.com
- timeout_exceeded@example.com
- unroutable_ip_address@example.com
- free_email@example.com

**You can this IP to test the GEO Location in the API.**

- 99.110.204.1