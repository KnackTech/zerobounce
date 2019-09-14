<?php namespace Knack\ZeroBounce\Enums;

class GenderEnum {
    const MALE = 'male';

    const FEMALE = 'female';

    /**
     * @param string $value
     *
     * @return string|null
     */
    public static function from( $value = '') {
        switch ( $value ) {
            case 'male':
                return self::MALE;
            case 'female':
                return self::FEMALE;
            default:
                return null;
        }
    }
}