<?php

/**
 * The tests for ResponseException::class
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

use Knack\ZeroBounce\Exceptions\ResponseException;
use PHPUnit\Framework\TestCase;

/**
 * Class ResponseExceptionTest
 *
 * @category Tests
 * @package  Knack\ZeroBounce\Tests\Unit\Exceptions
 * @author   Doug Woodrow <doug@joinknack.com>
 * @license  https://github.com/KnackTech/zerobounce/blob/develop/LICENSE MIT License
 * @link     https://joinknack.com
 */
final class ResponseExceptionTest extends TestCase
{
    /**
     * Test an Exception is created successfully.
     *
     * @return void
     */
    public function testExceptionCreated(): void
    {
        $this->assertInstanceOf(ResponseException::class, new ResponseException('Testing', 1));
    }
}
