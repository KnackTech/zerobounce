<?php

use Dotenv\Dotenv;
use Knack\ZeroBounce\API\ZeroBounce;
use PHPUnit\Framework\TestCase;

final class ZeroBounceTest extends TestCase {
    private $zeroBounce;

    /**
     * Test set up.
     */
    public function setUp() {
        parent::setUp();
        $dotenv = Dotenv::create( __DIR__ . '/../../' );
        $dotenv->load();

        $this->zeroBounce = new ZeroBounce( getenv( 'ZEROBOUNCE_API_KEY' ) );
    }

    /**
     * Test validating an email address with an IP.
     */
    public function testCanValidateEmailWithIp() {
        $response = $this->zeroBounce->validate( 'valid@example.com', '99.110.204.1' );

        $this->assertNotNull( $response );
        $this->assertEquals( 'valid', $response->status );
    }

    /**
     * Test validating an email address with an IP.
     */
    public function testCanValidateEmailWithoutIp() {
        $response = $this->zeroBounce->validate( 'valid@example.com' );

        $this->assertNotNull( $response );
        $this->assertEquals( 'valid', $response->status );
    }

    /**
     * Test validating an email address with an IP.
     */
    public function testCanGetAccountCredits() {
        $response = $this->zeroBounce->getAccountCredits();

        $this->assertTrue( $response >= 0 );
    }
}