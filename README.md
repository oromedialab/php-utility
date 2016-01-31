PHP Utility Library
=============
* [String](#)
* [DateTime](#)


String
------
```php
namespace Oml\PHPUtility\Common;

// Add ordinal suffix to a number
// Output : 1st, 2nd, 3rd, 4th...
String::ordinalSuffix($number);
// Generate random numbers
// Output : r5Mx7faGpI7lCqb12ooGGhe2WIvnhCmUppLKkYl3wETJS8iS4G
String::random($length = 5);
// Generate chunked serial
// Output : M1WBEGZ2-H21G26KO-QU9GGTFR-XJMZ78VV-CL6OZ8YU
String::chunkedSerial($separator = '-', $charactersPerChunk = 8, $chunks = 5, $upperCase = true);
```

DateTime
--------
```php
namespace Oml\PHPUtility\Common;

// Verify date in given format, by default Y-m-d format is used
// Output : Boolean
DateTime::verify($date, $format = 'Y-m-d', $strict = true);
```