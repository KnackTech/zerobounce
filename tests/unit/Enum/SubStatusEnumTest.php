<?php namespace Knack\ZeroBounce\Tests\Unit\Enum;

use Knack\ZeroBounce\Enums\SubStatusEnum;
use PHPUnit\Framework\TestCase;

final class SubStatusEnumTest extends TestCase {

    /**
     * Test Enum non-null value is returned when non-null value is passed.
     */
    public function testOnNonNullValue() {
        $this->assertNotNull( SubStatusEnum::from( SubStatusEnum::ANTISPAM_SYSTEM));
    }

    /**
     * Test Enum null value is returned when null value is passed.
     */
    public function testOnNullValue() {
        $this->assertNull(SubStatusEnum::from(null));
    }
}