<?php

class PhoneNumber
{
    public static function parse(string $number, $country = '7') {
        $number = preg_replace("/[^0-9\.]/", '', $number);
        $number = preg_replace('/^8/', $country, $number);
        $number = preg_replace('/^9/', $country.'9', $number);
        return $number;
    }
}
