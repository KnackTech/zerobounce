<?php

/**
 * The tests for ZeroBounceServiceProvider::class
 *
 * PHP Version 7.0
 *
 * @category Tests
 * @package  Knack\ZeroBounce\Tests\Functional\Providers
 * @author   Doug Woodrow <doug@joinknack.com>
 * @license  https://github.com/KnackTech/zerobounce/blob/develop/LICENSE MIT License
 * @link     https://joinknack.com
 */
namespace Knack\ZeroBounce\Tests\Functional\Providers;

use Knack\ZeroBounce\Providers\ZeroBounceServiceProvider;
use Mockery;
use PHPUnit\Framework\TestCase;

/**
 * Class ZeroBounceServiceProviderTest
 *
 * @category Tests
 * @package  Knack\ZeroBounce\Tests\Functional\Providers
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
    public function testServiceProviderRegisters(): void
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
    public function testServiceProviderProvides(): void
    {
        $serviceProvider = new ZeroBounceServiceProvider([]);
        $this->assertNotNull($serviceProvider->provides());
    }
}
