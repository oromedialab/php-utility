PHP Utility Library
=============

String
------
```php
// Add ordinal suffix to a number
Oml\PHPUtility\Common\String::ordinalSuffix($number);
// Generate random numbers
Oml\PHPUtility\Common\String::random($length = 5);
// Generate chunked serial
Oml\PHPUtility\Common\String::chunkedSerial($separator = '-', $charactersPerChunk = 8, $chunks = 5, $upperCase = true);
```

DateTime
--------
```php
// Verify date in given format, by default Y-m-d format is used
Oml\PHPUtility\Common\DateTime::verify($date, $format = 'Y-m-d', $strict = true)
```