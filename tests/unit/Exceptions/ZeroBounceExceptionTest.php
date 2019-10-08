<?php namespace Knack\ZeroBounce\Tests\Unit\Enum;

use Knack\ZeroBounce\Exceptions\ResponseException;
use Knack\ZeroBounce\Exceptions\ZeroBounceException;
use PHPUnit\Framework\TestCase;

final class ZeroBounceExceptionTest extends TestCase {

    /**
     * Test an Exception is created successfully.
     */
    public function testExceptionCreated(): void {
        $this->assertInstanceOf(ZeroBounceException::class, new ZeroBounceException('Testing', 1) );
    }
}