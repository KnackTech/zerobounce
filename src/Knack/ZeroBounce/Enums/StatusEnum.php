<?php namespace Knack\ZeroBounce\Enums;

class StatusEnum {
    const VALID = 'valid';

    const INVALID = 'invalid';

    const CATCH_ALL = 'catch-all';

    const UNKNOWN = 'unknown';

    const SPAMTRAP = 'spamtrap';

    const ABUSE = 'abuse';

    const DO_NOT_MAIL = 'do_not_mail';

    /**
     * @param string $value
     *
     * @return string|null
     */
    public static function from( $value = '' ) {
        switch ( $value ) {
            case 'valid':
                return self::VALID;
            case 'invalid':
                return self::INVALID;
            case 'catch-all':
                return self::CATCH_ALL;
            case 'unknown':
                return self::UNKNOWN;
            case 'spamtrap':
                return self::SPAMTRAP;
            case 'abuse':
                return self::ABUSE;
            case 'do_not_mail':
                return self::DO_NOT_MAIL;
            default:
                return null;
        }
    }
}