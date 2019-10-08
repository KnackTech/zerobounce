<?php
namespace Knack\ZeroBounce\Tests\Functional\Utilities;

use Dotenv\Dotenv;
use Knack\ZeroBounce\Utilities\Environment;
use PHPUnit\Framework\TestCase;

final class EnvironmentTest extends TestCase
{
    /**
     * Test set up.
     */
    public function setUp(): void
    {
        parent::setUp();
        $dotenv = new Dotenv(__DIR__ . '/../../../');
        $dotenv->load();
    }

    /**
     * Test Environment Variable is fetched successfully.
     */
    public function testEnvironmentVariableFetch(): void
    {
        $this->assertNotNull(Environment::get('ZEROBOUNCE_API_KEY'));
    }
}
