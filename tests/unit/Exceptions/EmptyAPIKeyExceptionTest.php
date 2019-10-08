<?php
namespace Knack\ZeroBounce\Tests\Unit\Enum;

use Knack\ZeroBounce\Exceptions\EmptyAPIKeyException;
use PHPUnit\Framework\TestCase;

final class EmptyAPIKeyExceptionTest extends TestCase
{
    /**
     * Test an Exception is created successfully.
     */
    public function testExceptionCreated(): void
    {
        $this->assertInstanceOf(EmptyAPIKeyException::class, new EmptyAPIKeyException('Testing', 1));
    }
}
