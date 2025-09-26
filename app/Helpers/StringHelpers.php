<?php

namespace App\Helpers;

class StringHelpers
{
    public static function initials($string)
    {
        $words = explode(' ', $string);
        $initials = '';

        foreach ($words as $word) {
            $initials .= strtoupper($word[0]);
        }

        return $initials;
    }
}
