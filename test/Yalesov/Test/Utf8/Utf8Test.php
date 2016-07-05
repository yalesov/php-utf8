<?php
namespace Yalesov\Test\Utf8;

use Yalesov\Utf8\Utf8;

class Utf8Test extends \PHPUnit_Framework_TestCase
{
    public function setUp()
    {
        // test on boundaries
        $this->map = array(
            0           => "\0",

            0x7F        => '',
            0x80        => '',

            0x7FF       => '߿',
            0x800       => 'ࠀ',

            0xFFFF      => '￿',
            0x10000     => '𐀀',

            0x1000FF    => '􀃿',
        );
    }

    public function testUchr()
    {
        foreach ($this->map as $point => $char) {
            $this->assertSame($char, Utf8::uchr($point));
        }
        $this->assertSame('', Utf8::uchr(0x200000));
    }

    public function testUord()
    {
        foreach ($this->map as $point => $char) {
            $this->assertSame($point, Utf8::uord($char));
        }
        $this->assertSame(false, Utf8::uord(''));
    }
}
