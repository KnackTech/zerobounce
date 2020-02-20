<p align="center">
  <a href="https://joinknack.com/">
    <img alt="Knack Technologies, Inc." src="https://static.joinknack.com/images/logos/knack-logo-orange.svg" width="300">
  </a>
</p>

<p align="center">
  Knack ZeroBounce PHP API Wrapper
</p>

<p align="center">
    <a href="https://codecov.io/gh/KnackTech/zerobounce">
      <img src="https://codecov.io/gh/KnackTech/zerobounce/branch/master/graph/badge.svg?token=VSBXEKUDkT" />
    </a>
</p>



## Installing Knack's ZeroBounce


The recommended way to install Knack's ZeroBounce is through
[Composer](https://getcomposer.org/). PHP 7.2+ Required.

```bash
composer require knack/zerobounce
```



#### Example usage:

##### Laravel

```php
<?php

use Knack\ZeroBounce\API\ZeroBounce;
use Knack\ZeroBounce\Enums\StatusEnum;

class EmailService {
    /**
     * @var ZeroBounce
     */
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

use Knack\ZeroBounce\API\ZeroBounce;
use Knack\ZeroBounce\Enums\StatusEnum;

class EmailService {
    /**
     * @var ZeroBounce
     */
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
## Documentation

**Properties and possible values in Response:**

## Help and docs

- [ZeroBounce](https://www.zerobounce.net/)
- [ZeroBounce API Docs](https://www.zerobounce.net/docs/)

## Contributing

### Submitting PRs

To submit a Pull Request to this repo, just simply open up the Pull Request targeting `develop`.

Please ensure all tests are passing _**prior**_ to submitting your Pull Request.

### Running the tests

```bash
composer test
```

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
