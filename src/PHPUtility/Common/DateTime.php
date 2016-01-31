<?php

namespace Oml\PHPUtility\Common;

class DateTime
{
	public static function verify($date, $format = 'Y-m-d', $strict = true)
    {
        $dateTime = \DateTime::createFromFormat($format, $date);
        if ($strict) {
            $errors = \DateTime::getLastErrors();
            if (!empty($errors['warning_count'])) {
                return false;
            }
        }
        return $dateTime !== false;
    }
}
