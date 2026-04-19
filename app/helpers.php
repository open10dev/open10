<?php

if (! function_exists('flag')) {
    /**
     * Convert a 2-letter ISO country code to a flag emoji.
     * Works by mapping each letter to its Regional Indicator Symbol.
     */
    function flag(string $countryCode): string
    {
        $code = strtoupper(trim($countryCode));
        if (strlen($code) !== 2) {
            return '';
        }
        $offset = 0x1F1A5; // ord('A') → U+1F1E6
        return mb_chr($offset + ord($code[0])) . mb_chr($offset + ord($code[1]));
    }
}
