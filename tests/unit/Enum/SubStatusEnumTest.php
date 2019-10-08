<?php
namespace Knack\ZeroBounce\Tests\Unit\Enum;

use Knack\ZeroBounce\Enums\SubStatusEnum;
use PHPUnit\Framework\TestCase;

/**
 * Class SubStatusEnumTest
 *
 * @category Tests
 * @package  Knack\ZeroBounce\Tests
 * @author   Doug Woodrow <doug@joinknack.com>
 * @license  https://github.com/KnackTech/zerobounce/blob/develop/LICENSE MIT License
 * @link     https://joinknack.com
 */
final class SubStatusEnumTest extends TestCase
{
    /**
     * Test Enum non-null value is returned when non-null value is passed.
     */
    public function testOnNonNullValue()
    {
        $this->assertNotNull(SubStatusEnum::from(SubStatusEnum::ANTISPAM_SYSTEM));
    }

    /**
     * Test Enum null value is returned when null value is passed.
     */
    public function testOnNullValue()
    {
        $this->assertNull(SubStatusEnum::from(null));
    }

    /**
     * Test Enum null value are returned correctly
     *
     * @return void
     */
    public function testCorrectValuesReturned()
    {
        $this->assertEquals(SubStatusEnum::ANTISPAM_SYSTEM, SubStatusEnum::from(SubStatusEnum::ANTISPAM_SYSTEM));
        $this->assertEquals(SubStatusEnum::GREYLISTED, SubStatusEnum::from(SubStatusEnum::GREYLISTED));
        $this->assertEquals(SubStatusEnum::MAIL_SERVER_TEMPORARY_ERROR, SubStatusEnum::from(SubStatusEnum::MAIL_SERVER_TEMPORARY_ERROR));
        $this->assertEquals(SubStatusEnum::FORCIBLE_DISCONNECT, SubStatusEnum::from(SubStatusEnum::FORCIBLE_DISCONNECT));
        $this->assertEquals(SubStatusEnum::TIMEOUT_EXCEEDED, SubStatusEnum::from(SubStatusEnum::TIMEOUT_EXCEEDED));
        $this->assertEquals(SubStatusEnum::FAILED_SMTP_CONNECTION, SubStatusEnum::from(SubStatusEnum::FAILED_SMTP_CONNECTION));
        $this->assertEquals(SubStatusEnum::MAILBOX_QUOTA_EXCEEDED, SubStatusEnum::from(SubStatusEnum::MAILBOX_QUOTA_EXCEEDED));
        $this->assertEquals(SubStatusEnum::EXCEPTION_OCCURRED, SubStatusEnum::from(SubStatusEnum::EXCEPTION_OCCURRED));
        $this->assertEquals(SubStatusEnum::POSSIBLE_TRAPS, SubStatusEnum::from(SubStatusEnum::POSSIBLE_TRAPS));
        $this->assertEquals(SubStatusEnum::ROLE_BASED, SubStatusEnum::from(SubStatusEnum::ROLE_BASED));
        $this->assertEquals(SubStatusEnum::GLOBAL_SUPPRESSION, SubStatusEnum::from(SubStatusEnum::GLOBAL_SUPPRESSION));
        $this->assertEquals(SubStatusEnum::MAILBOX_NOT_FOUND, SubStatusEnum::from(SubStatusEnum::MAILBOX_NOT_FOUND));
        $this->assertEquals(SubStatusEnum::NO_DNS_ENTRIES, SubStatusEnum::from(SubStatusEnum::NO_DNS_ENTRIES));
        $this->assertEquals(SubStatusEnum::FAILED_SYNTAX_CHECK, SubStatusEnum::from(SubStatusEnum::FAILED_SYNTAX_CHECK));
        $this->assertEquals(SubStatusEnum::POSSIBLE_TYPO, SubStatusEnum::from(SubStatusEnum::POSSIBLE_TYPO));
        $this->assertEquals(SubStatusEnum::UNROUTABLE_IP_ADDRESS, SubStatusEnum::from(SubStatusEnum::UNROUTABLE_IP_ADDRESS));
        $this->assertEquals(SubStatusEnum::LEADING_PERIOD_REMOVED, SubStatusEnum::from(SubStatusEnum::LEADING_PERIOD_REMOVED));
        $this->assertEquals(SubStatusEnum::DOES_NOT_ACCEPT_MAIL, SubStatusEnum::from(SubStatusEnum::DOES_NOT_ACCEPT_MAIL));
        $this->assertEquals(SubStatusEnum::ROLE_BASED_CATCH_ALL, SubStatusEnum::from(SubStatusEnum::ROLE_BASED_CATCH_ALL));
        $this->assertEquals(SubStatusEnum::DISPOSABLE, SubStatusEnum::from(SubStatusEnum::DISPOSABLE));
        $this->assertEquals(SubStatusEnum::TOXIC, SubStatusEnum::from(SubStatusEnum::TOXIC));
    }
}
