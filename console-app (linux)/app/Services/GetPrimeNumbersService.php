<?php

namespace App\Services;

class GetPrimeNumbersService
{
    public function execute($numbersList)
    {
        $primeNumbers = [];

        foreach ($numbersList as $number) {
            $isPrime = true;

            if ($number === 1) continue;

            for ($i = 2; $i <= $number / 2; $i++) {
                if ($number % $i === 0) {
                    $isPrime = false;
                    break;
                }
            }

            if (!$isPrime) continue;

            $primeNumbers[] = $number;
        }

        return $primeNumbers;
    }
}