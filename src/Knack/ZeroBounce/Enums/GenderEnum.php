<?php

/**
 * The Gender Enum for gender used in Response
 *
 * PHP Version 7.0
 *
 * @category Enums
 * @package  Knack\ZeroBounce\Enums
 * @author   Doug Woodrow <doug@joinknack.com>
 * @license  https://github.com/KnackTech/zerobounce/blob/develop/LICENSE MIT License
 * @link     https://joinknack.com
 */

namespace Knack\ZeroBounce\Enums;

/**
 * Class GenderEnum
 *
 * @category Enums
 * @package  Knack\ZeroBounce\Enums
 * @author   Doug Woodrow <doug@joinknack.com>
 * @license  https://github.com/KnackTech/zerobounce/blob/develop/LICENSE MIT License
 * @link     https://joinknack.com
 */

class GenderEnum
{
    const MALE = 'male';

    const FEMALE = 'female';

    /**
     * Return enum from passed value
     *
     * @param string $value the passed value
     *
     * @return string|null
     */
    public static function from($value = '')
    {
        switch ($value) {
        case 'male':
            return self::MALE;
        case 'female':
            return self::FEMALE;
        default:
            return null;
        }
    }
}
