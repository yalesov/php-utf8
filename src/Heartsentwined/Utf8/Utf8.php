<?php
namespace Heartsentwined\Utf8;

use Heartsentwined\ArgValidator\ArgValidator;

class Utf8
{
    /**
     * UTF-8 version of chr()
     *
     * @param int|float|string $num ('numeric')
     * @return string
     */
    public static function uchr($num)
    {
        ArgValidator::assert($num, 'numeric');

        if($num<=0x7F)       return chr($num);
        if($num<=0x7FF)      return chr(($num>>6)+192).chr(($num&63)+128);
        if($num<=0xFFFF)     return chr(($num>>12)+224).chr((($num>>6)&63)+128).chr(($num&63)+128);
        if($num<=0x1FFFFF)   return chr(($num>>18)+240).chr((($num>>12)&63)+128).chr((($num>>6)&63)+128).chr(($num&63)+128);
        return '';
    }

    /**
     * UTF-8 version of ord()
     *
     * @param string $c
     * @return int
     */
    public static function uord($c)
    {
        ArgValidator::assert($c, 'string');

        if (empty($c)) return false;

        $ord0 = ord($c{0}); if ($ord0>=0   && $ord0<=127) return $ord0;
        $ord1 = ord($c{1}); if ($ord0>=192 && $ord0<=223) return ($ord0-192)*64 + ($ord1-128);
        $ord2 = ord($c{2}); if ($ord0>=224 && $ord0<=239) return ($ord0-224)*4096 + ($ord1-128)*64 + ($ord2-128);
        $ord3 = ord($c{3}); if ($ord0>=240 && $ord0<=247) return ($ord0-240)*262144 + ($ord1-128)*4096 + ($ord2-128)*64 + ($ord3-128);
        return false;
    }
}
