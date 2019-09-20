<?php

use Dotenv\Dotenv;
use Knack\ZeroBounce\API\ZeroBounce;
use Knack\ZeroBounce\Enums\StatusEnum;
use Knack\ZeroBounce\Exceptions\EmptyAPIKeyException;
use Knack\ZeroBounce\Utilities\Environment;
use PHPUnit\Framework\TestCase;

final class ZeroBounceTest extends TestCase {
    private $zeroBounce;

    /**
     * Test set up.
     */
    public function setUp() {
        parent::setUp();
        $dotenv = new Dotenv( __DIR__ . '/../../../' );
        $dotenv->load();

        $this->zeroBounce = new ZeroBounce( Environment::get( 'ZEROBOUNCE_API_KEY' ) );
    }

    /**
     * Test Graceful API Key handling.
     */
    public function testGracefulAPIKeyHandling() {
        try {
            $zeroBounce = new ZeroBounce( '' );
            $this->assertNotNull($zeroBounce);
        } catch (Throwable $e) {
            $this->fail('Exception thrown when should handle gracefully');
        }
    }

    /**
     * Test API Key Exception being thrown.
     */
    public function testEmptyAPIKeyThrowsException() {
        $this->expectException( EmptyAPIKeyException::class );
        $zeroBounce = new ZeroBounce( '' );
        $zeroBounce->getAccountCredits();
    }

    /**
     * Test validating an email address with an IP.
     */
    public function testCanValidateEmailWithIp() {
        $response = $this->zeroBounce->validate( 'valid@example.com', '99.110.204.1' );

        $this->assertNotNull( $response );
        $this->assertEquals( StatusEnum::VALID, $response->status );
    }

    /**
     * Test validating an email address with an IP.
     */
    public function testCanValidateEmailWithoutIp() {
        $response = $this->zeroBounce->validate( 'valid@example.com' );

        $this->assertNotNull( $response );
        $this->assertEquals( StatusEnum::VALID, $response->status );
    }

    /**
     * Test validating an email address with an IP.
     */
    public function testCanGetAccountCredits() {
        $response = $this->zeroBounce->getAccountCredits();

        $this->assertTrue( $response >= 0 );
    }
}