<?php

/**
 * The tests for ZeroBounceException::class
 *
 * PHP Version 7.0
 *
 * @category Tests
 * @package  Knack\ZeroBounce\Tests\Unit\Exceptions
 * @author   Doug Woodrow <doug@joinknack.com>
 * @license  https://github.com/KnackTech/zerobounce/blob/develop/LICENSE MIT License
 * @link     https://joinknack.com
 */
namespace Knack\ZeroBounce\Tests\Unit\Enum;

use Knack\ZeroBounce\Exceptions\ZeroBounceException;
use PHPUnit\Framework\TestCase;

/**
 * Class ZeroBounceExceptionTest
 *
 * @category Tests
 * @package  Knack\ZeroBounce\Tests\Unit\Exceptions
 * @author   Doug Woodrow <doug@joinknack.com>
 * @license  https://github.com/KnackTech/zerobounce/blob/develop/LICENSE MIT License
 * @link     https://joinknack.com
 */
final class ZeroBounceExceptionTest extends TestCase
{
    /**
     * Test an Exception is created successfully.
     *
     * @return void
     */
    public function testExceptionCreated(): void
    {
        $this->assertInstanceOf(ZeroBounceException::class, new ZeroBounceException('Testing', 1));
    }
}
