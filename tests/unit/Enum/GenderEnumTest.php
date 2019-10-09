<?php

/**
 * The tests for GenderEnum::class
 *
 * PHP Version 7.0
 *
 * @category Tests
 * @package  Knack\ZeroBounce\Tests\Unit\Enum
 * @author   Doug Woodrow <doug@joinknack.com>
 * @license  https://github.com/KnackTech/zerobounce/blob/develop/LICENSE MIT License
 * @link     https://joinknack.com
 */
namespace Knack\ZeroBounce\Tests\Unit\Enum;

use Knack\ZeroBounce\Enums\GenderEnum;
use PHPUnit\Framework\TestCase;

/**
 * Class GenderEnumTest
 *
 * @category Tests
 * @package  Knack\ZeroBounce\Tests\Unit\Enum
 * @author   Doug Woodrow <doug@joinknack.com>
 * @license  https://github.com/KnackTech/zerobounce/blob/develop/LICENSE MIT License
 * @link     https://joinknack.com
 */
final class GenderEnumTest extends TestCase
{
    /**
     * Test Enum non-null value is returned when non-null value is passed
     *
     * @return void
     */
    public function testOnNonNullValue(): void
    {
        $this->assertNotNull(GenderEnum::from(GenderEnum::MALE));
    }

    /**
     * Test Enum null value is returned when null value is passed
     *
     * @return void
     */
    public function testOnNullValue(): void
    {
        $this->assertNull(GenderEnum::from(null));
    }

    /**
     * Test Enum null value are returned correctly
     *
     * @return void
     */
    public function testCorrectValuesReturned()
    {
        $this->assertEquals(GenderEnum::FEMALE, GenderEnum::from(GenderEnum::FEMALE));
        $this->assertEquals(GenderEnum::MALE, GenderEnum::from(GenderEnum::MALE));
    }
}
