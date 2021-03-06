<?php

/**
 * The Status Enum for status used in Response
 *
 * PHP Version 7.0
 *
 * @category Enums
 * @package  Knack\ZeroBounce\Enums
 * @author   Doug Woodrow <doug@joinknack.com>
 * @license  https://github.com/KnackTech/zerobounce/blob/develop/LICENSE MIT License
 * @link     https://joinknack.com
 */
namespace Knack\ZeroBounce\Enums;

/**
 * Class StatusEnum
 *
 * @category Enums
 * @package  Knack\ZeroBounce\Enums
 * @author   Doug Woodrow <doug@joinknack.com>
 * @license  https://github.com/KnackTech/zerobounce/blob/develop/LICENSE MIT License
 * @link     https://joinknack.com
 */
class StatusEnum
{
    public const VALID = 'valid';

    public const INVALID = 'invalid';

    public const CATCH_ALL = 'catch-all';

    public const UNKNOWN = 'unknown';

    public const SPAMTRAP = 'spamtrap';

    public const ABUSE = 'abuse';

    public const DO_NOT_MAIL = 'do_not_mail';

    /**
     * Return enum from passed value
     *
     * @param string $value the passed value
     *
     * @return string|null
     */
    public static function from($value = '')
    {
        switch ($value) {
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
