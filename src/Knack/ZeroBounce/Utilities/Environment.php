<?php

/**
 * The getter for environment variables
 *
 * PHP Version 7.0
 *
 * @category Enums
 * @package  Knack\ZeroBounce\Enums
 * @author   Doug Woodrow <doug@joinknack.com>
 * @license  https://github.com/KnackTech/zerobounce/blob/develop/LICENSE MIT License
 * @link     https://joinknack.com
 */
namespace Knack\ZeroBounce\Utilities;

/**
 * Class Environment
 *
 * @category Enums
 * @package  Knack\ZeroBounce\Utilities
 * @author   Doug Woodrow <doug@joinknack.com>
 * @license  https://github.com/KnackTech/zerobounce/blob/develop/LICENSE MIT License
 * @link     https://joinknack.com
 */
class Environment
{
    /**
     * Get an environment variable by key name
     *
     * @param string $key     the key of the variable to lookup
     * @param mixed  $default the default value to return if the environment variable is not found
     *
     * @return array|false|string
     */
    public static function get(string $key, $default = '')
    {
        $environmentVariable = getenv($key);

        if ($environmentVariable === false) {
            return value($default);
        }

        switch (strtolower($environmentVariable)) {
        case 'true':
        case '(true)':
            return true;
        case 'false':
        case '(false)':
            return false;
        case 'empty':
        case '(empty)':
            return '';
        case 'null':
        case '(null)':
            return;
        }

        if (($valueLength = strlen($environmentVariable)) > 1
            && strpos($environmentVariable, '"') === 0
            && $environmentVariable[$valueLength - 1] === '"'
        ) {
            return substr($environmentVariable, 1, - 1);
        }

        return $environmentVariable;
    }
}
