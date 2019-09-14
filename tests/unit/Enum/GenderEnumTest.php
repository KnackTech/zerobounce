<?php

use Knack\ZeroBounce\Enums\GenderEnum;
use PHPUnit\Framework\TestCase;

final class GenderEnumTest extends TestCase {

    /**
     * Test Enum non-null value is returned when non-null value is passed.
     */
    public function testOnNonNullValue() {
        $this->assertNotNull( GenderEnum::from( GenderEnum::MALE ) );
    }

    /**
     * Test Enum null value is returned when null value is passed.
     */
    public function testOnNullValue() {
        $this->assertNull( GenderEnum::from( null ) );
    }
}