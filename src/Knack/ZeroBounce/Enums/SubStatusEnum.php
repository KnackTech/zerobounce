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
 * Class SubStatusEnum
 *
 * @category Enums
 * @package  Knack\ZeroBounce\Enums
 * @author   Doug Woodrow <doug@joinknack.com>
 * @license  https://github.com/KnackTech/zerobounce/blob/develop/LICENSE MIT License
 * @link     https://joinknack.com
 */
class SubStatusEnum
{
    const ANTISPAM_SYSTEM = 'antispam_system';

    const GREYLISTED = 'greylisted';

    const MAIL_SERVER_TEMPORARY_ERROR = 'mail_server_temporary_error';

    const FORCIBLE_DISCONNECT = 'forcible_disconnect';

    const TIMEOUT_EXCEEDED = 'timeout_exceeded';

    const FAILED_SMTP_CONNECTION = 'failed_smtp_connection';

    const MAILBOX_QUOTA_EXCEEDED = 'mailbox_quota_exceeded';

    const EXCEPTION_OCCURRED = 'exception_occurred';

    const POSSIBLE_TRAPS = 'possible_traps';

    const ROLE_BASED = 'role_based';

    const GLOBAL_SUPPRESSION = 'global_suppression';

    const MAILBOX_NOT_FOUND = 'mailbox_not_found';

    const NO_DNS_ENTRIES = 'no_dns_entries';

    const FAILED_SYNTAX_CHECK = 'failed_syntax_check';

    const POSSIBLE_TYPO = 'possible_typo';

    const UNROUTABLE_IP_ADDRESS = 'unroutable_ip_address';

    const LEADING_PERIOD_REMOVED = 'leading_period_removed';

    const DOES_NOT_ACCEPT_MAIL = 'does_not_accept_mail';

    const ROLE_BASED_CATCH_ALL = 'role_based_catch_all';

    const DISPOSABLE = 'disposable';

    const TOXIC = 'toxic';

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
        case 'antispam_system':
            return self::ANTISPAM_SYSTEM;
        case 'greylisted':
            return self::GREYLISTED;
        case 'mail_server_temporary_error':
            return self::MAIL_SERVER_TEMPORARY_ERROR;
        case 'forcible_disconnect':
            return self::FORCIBLE_DISCONNECT;
        case 'timeout_exceeded':
            return self::TIMEOUT_EXCEEDED;
        case 'failed_smtp_connection':
            return self::FAILED_SMTP_CONNECTION;
        case 'mailbox_quota_exceeded':
            return self::MAILBOX_QUOTA_EXCEEDED;
        case 'exception_occurred':
            return self::EXCEPTION_OCCURRED;
        case 'possible_traps':
            return self::POSSIBLE_TRAPS;
        case 'role_based':
            return self::ROLE_BASED;
        case 'global_suppression':
            return self::GLOBAL_SUPPRESSION;
        case 'mailbox_not_found':
            return self::MAILBOX_NOT_FOUND;
        case 'no_dns_entries':
            return self::NO_DNS_ENTRIES;
        case 'failed_syntax_check':
            return self::FAILED_SYNTAX_CHECK;
        case 'possible_typo':
            return self::POSSIBLE_TYPO;
        case 'unroutable_ip_address':
            return self::UNROUTABLE_IP_ADDRESS;
        case 'leading_period_removed':
            return self::LEADING_PERIOD_REMOVED;
        case 'does_not_accept_mail':
            return self::DOES_NOT_ACCEPT_MAIL;
        case 'role_based_catch_all':
            return self::ROLE_BASED_CATCH_ALL;
        case 'disposable':
            return self::DISPOSABLE;
        case 'toxic':
            return self::TOXIC;
        default:
            return null;
        }
    }
}
