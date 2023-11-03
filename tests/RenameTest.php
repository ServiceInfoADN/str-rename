<?php

namespace Adn\Str\Test;
use Adn\Str\App\Rename;

class RenameTest extends \PHPUnit_Framework_TestCase
{

    /**
     * Return the test names
     */
    protected function getNames(): array
    {
        return [
            'sc'   => 'snake_case_name',
            'cc'   => 'CONSTANT_CASE_NAME',
            'hc'   => 'hyphen-case-name',
            'lcc'  => 'lowerCamelName',
            'ucc'  => 'UpperCamelName',
            'psr0' => 'Psr_Zero_Name',
        ];
    }

    /**
     * @covers Rename::snake
     * @covers Rename::underscore
     */
    public function testSnake()
    {
        $expected = [
            'sc'   => 'snake_case_name',
            'cc'   => 'constant_case_name',
            'hc'   => 'hyphen_case_name',
            'lcc'  => 'lower_camel_name',
            'ucc'  => 'upper_camel_name',
            'psr0' => 'psr_zero_name',
        ];
        $renames = array_map('Adn\Str\App\Rename::snake', $this->getNames());

        $this->assertEquals($expected, $renames);
    }

    /**
     * @covers Rename::constant
     * @covers Rename::underscore
     */
    public function testConstant()
    {
        $expected  = [
            'sc'   => 'SNAKE_CASE_NAME',
            'cc'   => 'CONSTANT_CASE_NAME',
            'hc'   => 'HYPHEN_CASE_NAME',
            'lcc'  => 'LOWER_CAMEL_NAME',
            'ucc'  => 'UPPER_CAMEL_NAME',
            'psr0' => 'PSR_ZERO_NAME',
        ];
        $renames = array_map('Adn\Str\App\Rename::constant', $this->getNames());

        $this->assertEquals($expected, $renames);
    }

    /**
     * @covers Rename::hyphen
     * @covers Rename::underscore
     */
    public function testHyphen()
    {
        $expected = [
            'sc'   => 'snake-case-name',
            'cc'   => 'constant-case-name',
            'hc'   => 'hyphen-case-name',
            'lcc'  => 'lower-camel-name',
            'ucc'  => 'upper-camel-name',
            'psr0' => 'psr-zero-name',
        ];
        $renames = array_map('Adn\Str\App\Rename::hyphen', $this->getNames());

        $this->assertEquals($expected, $renames);
    }

    /**
     * @covers Rename::camel
     */
    public function testCamel()
    {
        $expected  = [
            'sc'   => 'snakeCaseName',
            'cc'   => 'constantCaseName',
            'hc'   => 'hyphenCaseName',
            'lcc'  => 'lowerCamelName',
            'ucc'  => 'upperCamelName',
            'psr0' => 'psrZeroName',
        ];
        $renames = array_map('Adn\Str\App\Rename::camel', $this->getNames());

        $this->assertEquals($expected, $renames);
    }

    /**
     * @covers Rename::pascal
     */
    public function testPascal()
    {
        $expected  = [
            'sc'   => 'SnakeCaseName',
            'cc'   => 'ConstantCaseName',
            'hc'   => 'HyphenCaseName',
            'lcc'  => 'LowerCamelName',
            'ucc'  => 'UpperCamelName',
            'psr0' => 'PsrZeroName',
        ];
        $renames = array_map('Adn\Str\App\Rename::pascal', $this->getNames());

        $this->assertEquals($expected, $renames);
    }

    /**
     * @covers Rename::unite
     */
    public function testUnite()
    {
        $expected = [
            'sc'   => 'snakecasename',
            'cc'   => 'constantcasename',
            'hc'   => 'hyphencasename',
            'lcc'  => 'lowercamelname',
            'ucc'  => 'uppercamelname',
            'psr0' => 'psrzeroname',
        ];
        $renames = array_map('Adn\Str\App\Rename::unite', $this->getNames());

        $this->assertEquals($expected, $renames);
    }

    /**
     * @covers Rename::uniteUp
     */
    public function testUniteUp()
    {
        $expected  = [
            'sc'   => 'SNAKECASENAME',
            'cc'   => 'CONSTANTCASENAME',
            'hc'   => 'HYPHENCASENAME',
            'lcc'  => 'LOWERCAMELNAME',
            'ucc'  => 'UPPERCAMELNAME',
            'psr0' => 'PSRZERONAME',
        ];
        $renames = array_map('Adn\Str\App\Rename::uniteUp', $this->getNames());

        $this->assertEquals($expected, $renames);
    }
}
