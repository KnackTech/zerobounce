<?php

/**
 * The tests for Environment::class
 *
 * PHP Version 7.0
 *
 * @category Tests
 * @package  Knack\ZeroBounce\Tests\Functional\Utilities
 * @author   Doug Woodrow <doug@joinknack.com>
 * @license  https://github.com/KnackTech/zerobounce/blob/develop/LICENSE MIT License
 * @link     https://joinknack.com
 */
namespace Knack\ZeroBounce\Tests\Functional\Utilities;

use Dotenv\Dotenv;
use Knack\ZeroBounce\Utilities\Environment;
use PHPUnit\Framework\TestCase;

/**
 * Class EnvironmentTest
 *
 * @category Tests
 * @package  Knack\ZeroBounce\Tests\Functional\Utilities
 * @author   Doug Woodrow <doug@joinknack.com>
 * @license  https://github.com/KnackTech/zerobounce/blob/develop/LICENSE MIT License
 * @link     https://joinknack.com
 */
final class EnvironmentTest extends TestCase
{
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
    }

    /**
     * Test Environment Variable is fetched successfully.
     *
     * @return void
     */
    public function testEnvironmentVariableFetch(): void
    {
        $this->assertNotNull(Environment::get('ZEROBOUNCE_API_KEY'));
    }

    /**
     * Test Environment Variable uses default variable if no value is found for the specified key.
     *
     * @return void
     */
    public function testEnvironmentVariableDefault(): void
    {
        $this->assertIsBool(Environment::get('NONEXISTENT_KEY', true));
        $this->assertIsString(Environment::get('NONEXISTENT_KEY', 'testing'));
        $this->assertIsFloat(Environment::get('NONEXISTENT_KEY', 1.0));
        $this->assertIsInt(Environment::get('NONEXISTENT_KEY', 1));
    }
}
