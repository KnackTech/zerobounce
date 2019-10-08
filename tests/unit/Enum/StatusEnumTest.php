<?php
namespace Knack\ZeroBounce\Tests\Unit\Enum;

use Knack\ZeroBounce\Enums\StatusEnum;
use PHPUnit\Framework\TestCase;

/**
 * Class StatusEnumTest
 *
 * @category Tests
 * @package  Knack\ZeroBounce\Tests
 * @author   Doug Woodrow <doug@joinknack.com>
 * @license  https://github.com/KnackTech/zerobounce/blob/develop/LICENSE MIT License
 * @link     https://joinknack.com
 */
final class StatusEnumTest extends TestCase
{
    /**
     * Test Enum non-null value is returned when non-null value is passed.
     */
    public function testOnNonNullValue(): void
    {
        $this->assertNotNull(StatusEnum::from(StatusEnum::VALID));
    }

    /**
     * Test Enum null value is returned when null value is passed.
     */
    public function testOnNullValue(): void
    {
        $this->assertNull(StatusEnum::from(null));
    }

    /**
     * Test Enum null value are returned correctly
     *
     * @return void
     */
    public function testCorrectValuesReturned()
    {
        $this->assertEquals(StatusEnum::VALID, StatusEnum::from(StatusEnum::VALID));
        $this->assertEquals(StatusEnum::INVALID, StatusEnum::from(StatusEnum::INVALID));
        $this->assertEquals(StatusEnum::CATCH_ALL, StatusEnum::from(StatusEnum::CATCH_ALL));
        $this->assertEquals(StatusEnum::UNKNOWN, StatusEnum::from(StatusEnum::UNKNOWN));
        $this->assertEquals(StatusEnum::SPAMTRAP, StatusEnum::from(StatusEnum::SPAMTRAP));
        $this->assertEquals(StatusEnum::ABUSE, StatusEnum::from(StatusEnum::ABUSE));
        $this->assertEquals(StatusEnum::DO_NOT_MAIL, StatusEnum::from(StatusEnum::DO_NOT_MAIL));
    }
}
