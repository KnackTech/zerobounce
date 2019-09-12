<?php

use Dotenv\Dotenv;
use Knack\ZeroBounce\ZeroBounce;
use PHPUnit\Framework\TestCase;

final class ZeroBounceTest extends TestCase {

    public function setUp() {
        parent::setUp();
        $dotenv = Dotenv::create( __DIR__ . '/../../' );
        $dotenv->load();
    }

    /**
     * Test validating an email address with an IP.
     */
    public function testCanValidateEmailWithIp() {
        $zeroBounce = new ZeroBounce( getenv( 'ZEROBOUNCE_API_KEY' ) );

        $response = $zeroBounce->validate( 'valid@example.com', '99.110.204.1' );

        $this->assertNotNull( $response );
        $this->assertEquals('valid', $response->status);
    }

    /**
     * Test validating an email address with an IP.
     */
    public function testCanValidateEmailWithoutIp() {
        $zeroBounce = new ZeroBounce( getenv( 'ZEROBOUNCE_API_KEY' ) );

        $response = $zeroBounce->validate( 'valid@example.com' );

        $this->assertNotNull( $response );
        $this->assertEquals('valid', $response->status);
    }

    /**
     * Test validating an email address with an IP.
     */
    public function testCanGetAccountCredits() {
        $zeroBounce = new ZeroBounce( getenv( 'ZEROBOUNCE_API_KEY' ) );

        $response = $zeroBounce->getAccountCredits();

        $this->assertTrue( $response >= 0 );
    }
}