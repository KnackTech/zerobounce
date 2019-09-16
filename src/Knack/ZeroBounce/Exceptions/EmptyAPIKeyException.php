<?php

/**
 * The Exception for if an API Key is passed empty to the ZeroBounce class
 *
 * PHP Version 7.0
 *
 * @category Exceptions
 * @package  Knack\ZeroBounce\Exceptions
 * @author   Doug Woodrow <doug@joinknack.com>
 * @license  https://github.com/KnackTech/zerobounce/blob/develop/LICENSE MIT License
 * @link     https://joinknack.com
 */

namespace Knack\ZeroBounce\Exceptions {

    use RuntimeException;
    use Throwable;

    /**
     * Class EmptyAPIKeyException
     *
     * @category Exceptions
     * @package  Knack\ZeroBounce\Exceptions
     * @author   Doug Woodrow <doug@joinknack.com>
     * @license  https://github.com/KnackTech/zerobounce/blob/develop/LICENSE MIT License
     * @link     https://joinknack.com
     */
    class EmptyAPIKeyException extends RuntimeException
    {
        /**
         * EmptyAPIKeyException constructor.
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
}
