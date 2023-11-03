<?php

namespace Adn\Str\App;

class Rename
{
    /**
     * @param string $string
     * @return string
     */
    private static function underscore(string $string): string
    {
        if (str_contains($string, '_')) {
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
    public static function snake(string $string): string
    {
        return strtolower(self::underscore($string));
    }

    /**
     * CONSTANT_CASE
     *
     * @param string $string
     * @return string
     */
    public static function constant(string $string): string
    {
        return strtoupper(self::underscore($string));
    }

    /**
     * hyphen-case
     *
     * @param string $string
     * @return string
     */
    public static function hyphen(string $string): string
    {
        return strtolower(strtr(self::underscore($string), ['_' => '-']));
    }

    /**
     * camelCase (lowerCamelCase)
     *
     * @param string $string
     * @return string
     */
    public static function camel(string $string): string
    {
        return lcfirst(self::pascal($string));
    }

    /**
     * PascalCase (UpperCamelCase)
     *
     * @param string $string
     * @return string
     */
    public static function pascal(string $string): string
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
    public static function unite(string $string): string
    {
        return strtolower(strtr($string, ['_' => '', '-' => '']));
    }

    /**
     * UPPERUNITECASE
     *
     * @param string $string
     * @return string
     */
    public static function uniteUp(string $string): string
    {
        return strtoupper(strtr($string, ['_' => '', '-' => '']));
    }
}
