<?php

/**
 * The Exception for if there is an error with the ZeroBounce API
 *
 * PHP Version 7.0
 *
 * @category Exceptions
 * @package  Knack\ZeroBounce\Exceptions
 * @author   Doug Woodrow <doug@joinknack.com>
 * @license  https://github.com/KnackTech/zerobounce/blob/develop/LICENSE MIT License
 * @link     https://joinknack.com
 */
namespace Knack\ZeroBounce\Exceptions;

use RuntimeException;
use Throwable;

/**
 * Class ResponseException
 *
 * @category Exceptions
 * @package  Knack\ZeroBounce\Exceptions
 * @author   Doug Woodrow <doug@joinknack.com>
 * @license  https://github.com/KnackTech/zerobounce/blob/develop/LICENSE MIT License
 * @link     https://joinknack.com
 */
class ResponseException extends RuntimeException
{
    /**
     * ResponseException constructor.
     *
     * @param string         $message  the message
     * @param int            $code     the code to throw
     * @param Throwable|null $previous the previous thrown
     */
    public function __construct($message = '', $code = 0, Throwable $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }
}
