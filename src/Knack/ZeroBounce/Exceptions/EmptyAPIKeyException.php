<?php namespace Knack\ZeroBounce\Exceptions;

use RuntimeException;
use Throwable;

class EmptyAPIKeyException extends RuntimeException {
    public function __construct( $message = '', $code = 0, Throwable $previous = null ) {
        parent::__construct( $message, $code, $previous );
    }
}