PHP Utility Library
=============

All functions below are under following namespace `Oml\PHPUtility\Common`

String
------
* String::ordinalSuffix($number) - Add ordinal suffix to the number (1st, 2nd, 3rd, 4th...)
* String::random($length = 5) = Generate random numbers
* String::chunkedSerial($separator = '-', $charactersPerChunk = 8, $chunks = 5, $upperCase = true) - Generate chunked serial

DateTime
--------
* DateTime::verify($date, $format = 'Y-m-d', $strict = true) - Verify date in given format, by default Y-m-d format is used