<?php

/**
 * The tests for EmptyAPIKeyException::class
 *
 * PHP Version 7.0
 *
 * @category Tests
 * @package  Knack\ZeroBounce\Tests\Unit\Exceptions
 * @author   Doug Woodrow <doug@joinknack.com>
 * @license  https://github.com/KnackTech/zerobounce/blob/develop/LICENSE MIT License
 * @link     https://joinknack.com
 */
namespace Knack\ZeroBounce\Tests\Unit\Exceptions;

use Knack\ZeroBounce\Exceptions\EmptyAPIKeyException;
use PHPUnit\Framework\TestCase;

/**
 * Class EmptyAPIKeyExceptionTest
 *
 * @category Tests
 * @package  Knack\ZeroBounce\Tests\Unit\Exceptions
 * @author   Doug Woodrow <doug@joinknack.com>
 * @license  https://github.com/KnackTech/zerobounce/blob/develop/LICENSE MIT License
 * @link     https://joinknack.com
 */
final class EmptyAPIKeyExceptionTest extends TestCase
{
    /**
     * Test an Exception is created successfully.
     *
     * @return void
     */
    public function testExceptionCreated(): void
    {
        $this->assertInstanceOf(EmptyAPIKeyException::class, new EmptyAPIKeyException('Testing', 1));
    }
}
