<?php

/**
 * Str\Rename
 *
 * @author nnssn
 */

namespace Nnssn\Str;

class Rename
{
    /**
     * underscore
     *
     * @param string $string
     * @return string
     */
    private static function underscore($string)
    {
        if (strpos($string, '_') !== false) {
            return $string;
        }
        return strtr(preg_replace('/(?<=.)[A-Z]/', '_\0', $string), ['-' => '_']);
    }

    /**
     * snake_case
     *
     * @param string $string
     * @return string
     */
    public static function snake($string)
    {
        return strtolower(self::underscore($string));
    }

    /**
     * CONSTANT_CASE
     *
     * @param string $string
     * @return string
     */
    public static function constant($string)
    {
        return strtoupper(self::underscore($string));
    }

    /**
     * hyphen-case
     *
     * @param string $string
     * @return string
     */
    public static function hyphen($string)
    {
        return strtolower(strtr(self::underscore($string), ['_' => '-']));
    }

    /**
     * camelCase (lowerCamelCase)
     *
     * @param string $string
     * @return string
     */
    public static function camel($string)
    {
        return lcfirst(self::pascal($string));
    }

    /**
     * PascalCase (UpperCamelCase)
     *
     * @param string $string
     * @return string
     */
    public static function pascal($string)
    {
        $hit = 0;
        str_replace(['_', '-'], '', $string, $hit);

        $s = ($hit) ? strtolower($string) : $string;
        return strtr(ucwords(strtr($s, ['_' => ' ', '-' => ' '])), [' ' => '']);
    }

    /**
     * lowerunitecase
     *
     * @param string $string
     * @return string
     */
    public static function unite($string)
    {
        return strtolower(strtr($string, ['_' => '', '-' => '']));
    }

    /**
     * UPPERUNITECASE
     *
     * @param string $string
     * @return string
     */
    public static function uniteUp($string)
    {
        return strtoupper(strtr($string, ['_' => '', '-' => '']));
    }
}
