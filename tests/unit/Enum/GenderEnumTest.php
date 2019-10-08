<?php namespace Knack\ZeroBounce\Tests\Unit\Enum;

use Knack\ZeroBounce\Enums\GenderEnum;
use PHPUnit\Framework\TestCase;

final class GenderEnumTest extends TestCase {

    /**
     * Test Enum non-null value is returned when non-null value is passed.
     */
    public function testOnNonNullValue(): void {
        $this->assertNotNull( GenderEnum::from( GenderEnum::MALE ) );
    }

    /**
     * Test Enum null value is returned when null value is passed.
     */
    public function testOnNullValue(): void {
        $this->assertNull( GenderEnum::from( null ) );
    }
}