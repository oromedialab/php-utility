<?php

namespace Oml\PHPUtility\Common;

use Zend\Math\Rand;

class String
{
	public static function ordinalSuffix($number)
    {
	    $ends = array('th','st','nd','rd','th','th','th','th','th','th');
	    return  ((($number % 100) >= 11) && (($number % 100) <= 13)) ? $number.'th' : $number. $ends[$number % 10];
	}

	public static function random($length = 5)
	{
        return Rand::getString($length, 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789', true);
	}

	public static function chunkedSerial($separator = '-', $charactersPerChunk = 8, $chunks = 5, $upperCase = true)
    {
        $key = '';
        for ($i = 0; $i < $chunks; $i++) {
            $key .= self::random($charactersPerChunk);
            $key .= $i != $chunks - 1 ? $separator : '';
        }
        return true === $upperCase ? strtoupper($key) : $key;
    }
}
