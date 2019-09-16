<?php

use Dotenv\Dotenv;
use Knack\ZeroBounce\API\ZeroBounce;
use Knack\ZeroBounce\Enums\StatusEnum;
use Knack\ZeroBounce\Exceptions\EmptyAPIKeyException;
use Knack\ZeroBounce\Exceptions\ResponseException;
use Knack\ZeroBounce\Providers\ZeroBounceServiceProvider;
use PHPUnit\Framework\TestCase;

/**
 * Class ZeroBounceServiceProviderTest
 *
 * @category Tests
 * @package  Knack\ZeroBounce\Tests
 * @author   Doug Woodrow <doug@joinknack.com>
 * @license  https://github.com/KnackTech/zerobounce/blob/develop/LICENSE MIT License
 * @link     https://joinknack.com
 */
final class ZeroBounceServiceProviderTest extends TestCase
{

    /**
     * Test Service Provider registers
     *
     * @return void
     */
    public function testServiceProviderRegisters()
    {
        $mocked = Mockery::spy(ZeroBounceServiceProvider::class);
        $mocked->allows()->register()->andReturn(null);
        $this->assertNull($mocked->register());
    }

    /**
     * Test Service Provider provides
     *
     * @return void
     */
    public function testServiceProviderProvides()
    {
        $serviceProvider = new ZeroBounceServiceProvider([]);
        $this->assertNotNull($serviceProvider->provides());
    }
}
