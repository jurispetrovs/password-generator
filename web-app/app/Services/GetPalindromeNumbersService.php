<?php

namespace App\Services;

class GetPalindromeNumbersService
{
    public function execute($numbersList)
    {
        $palindromeNumbers = [];

        foreach ($numbersList as $number) {
            $reverse = (int)strrev($number);

            if ($number === $reverse) {
                $palindromeNumbers[] = $number;
            }
        }

        return $palindromeNumbers;
    }
}