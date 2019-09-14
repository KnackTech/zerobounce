<?php

use Knack\ZeroBounce\Enums\StatusEnum;
use PHPUnit\Framework\TestCase;

final class StatusEnumTest extends TestCase {

    /**
     * Test Enum non-null value is returned when non-null value is passed.
     */
    public function testOnNonNullValue() {
        $this->assertNotNull( StatusEnum::from( StatusEnum::VALID));
    }

    /**
     * Test Enum null value is returned when null value is passed.
     */
    public function testOnNullValue() {
        $this->assertNull(StatusEnum::from(null));
    }
}