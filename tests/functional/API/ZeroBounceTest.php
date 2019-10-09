<?php

/**
 * The tests for ZeroBounce::class
 *
 * PHP Version 7.0
 *
 * @category Tests
 * @package  Knack\ZeroBounce\Tests\Functional\API
 * @author   Doug Woodrow <doug@joinknack.com>
 * @license  https://github.com/KnackTech/zerobounce/blob/develop/LICENSE MIT License
 * @link     https://joinknack.com
 */
namespace Knack\ZeroBounce\Tests\Functional\API;

use Dotenv\Dotenv;
use Knack\ZeroBounce\API\ZeroBounce;
use Knack\ZeroBounce\Enums\StatusEnum;
use Knack\ZeroBounce\Exceptions\ResponseException;
use Knack\ZeroBounce\Exceptions\ZeroBounceException;
use Knack\ZeroBounce\Utilities\Environment;
use Mockery;
use PHPUnit\Framework\TestCase;
use Throwable;

/**
 * Class ZeroBounceTest
 *
 * @category Tests
 * @package  Knack\ZeroBounce\Tests\Functional\API
 * @author   Doug Woodrow <doug@joinknack.com>
 * @license  https://github.com/KnackTech/zerobounce/blob/develop/LICENSE MIT License
 * @link     https://joinknack.com
 */
final class ZeroBounceTest extends TestCase
{
    private $_zeroBounce;

    /**
     * Test set up.
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $dotenv = new Dotenv(__DIR__ . '/../../../');
        $dotenv->load();

        $this->_zeroBounce = new ZeroBounce(Environment::get('ZEROBOUNCE_API_KEY'));
    }

    /**
     * Test Graceful API Key handling.
     *
     * @return void
     */
    public function testGracefulAPIKeyHandling(): void
    {
        try {
            $zeroBounce = new ZeroBounce('');
            $this->assertNotNull($zeroBounce);
        } catch (Throwable $e) {
            $this->fail('Exception thrown when should handle gracefully');
        }
    }

    /**
     * Test API Key Exception being thrown.
     *
     * @return void
     */
    public function testEmptyAPIKeyThrowsException(): void
    {
        $zeroBounce = new ZeroBounce('');
        $this->expectException(ZeroBounceException::class);
        $zeroBounce->getAccountCredits();
    }

    /**
     * Test Response Exception being thrown.
     *
     * @return void
     */
    public function testFailedAPICall(): void
    {
        $this->expectException(ResponseException::class);

        $mocked = Mockery::mock(ZeroBounce::class);
        $mocked->allows()->validate('error')->andThrow(ResponseException::class);
        $mocked->validate('error');
    }

    /**
     * Test validating an email address with an IP.
     *
     * @return void
     */
    public function testCanValidateEmailWithIp(): void
    {
        $response = $this->_zeroBounce->validate('valid@example.com', '99.110.204.1');

        $this->assertNotNull($response);
        $this->assertEquals(StatusEnum::VALID, $response->status);
    }

    /**
     * Test validating an email address with an IP.
     *
     * @return void
     */
    public function testCanValidateEmailWithoutIp(): void
    {
        $response = $this->_zeroBounce->validate('valid@example.com');

        $this->assertNotNull($response);
        $this->assertEquals(StatusEnum::VALID, $response->status);
    }

    /**
     * Test validating an email address with an IP.
     *
     * @return void
     */
    public function testCanGetAccountCredits(): void
    {
        $response = $this->_zeroBounce->getAccountCredits();

        $this->assertTrue($response >= 0);
    }
}
