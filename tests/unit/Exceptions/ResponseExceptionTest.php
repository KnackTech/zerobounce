<?php
namespace Knack\ZeroBounce\Tests\Unit\Enum;

use Knack\ZeroBounce\Exceptions\ResponseException;
use PHPUnit\Framework\TestCase;

final class ResponseExceptionTest extends TestCase
{
    /**
     * Test an Exception is created successfully.
     */
    public function testExceptionCreated(): void
    {
        $this->assertInstanceOf(ResponseException::class, new ResponseException('Testing', 1));
    }
}
