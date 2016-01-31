PHP Utility Library
=============

All functions below are under following namespace `Oml\PHPUtility\Common`

String
------
```php
// Add ordinal suffix to the number
String::ordinalSuffix($number);

// Generate random numbers
String::random($length = 5);

// Generate chunked serial
String::chunkedSerial($separator = '-', $charactersPerChunk = 8, $chunks = 5, $upperCase = true);
```

DateTime
--------
```php
// Verify date in given format, by default Y-m-d format is used
DateTime::verify($date, $format = 'Y-m-d', $strict = true)
```