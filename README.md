PHP Utility Library
=============



String
------
```php
namespace Oml\PHPUtility\Common;

// Add ordinal suffix to a number
String::ordinalSuffix($number);
// Generate random numbers
String::random($length = 5);
// Generate chunked serial
String::chunkedSerial($separator = '-', $charactersPerChunk = 8, $chunks = 5, $upperCase = true);
```

DateTime
--------
```php
namespace Oml\PHPUtility\Common;

// Verify date in given format, by default Y-m-d format is used
DateTime::verify($date, $format = 'Y-m-d', $strict = true)
```