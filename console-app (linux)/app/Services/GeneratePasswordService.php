<?php

namespace App\Services;

class GeneratePasswordService
{
    public function execute($numbers, $maxPasswordLength)
    {
        $password = '';
        $passwordLength = rand(3, $maxPasswordLength);

        while ($passwordLength > 0) {
            $number = $numbers[array_rand($numbers)];

            if ($passwordLength >= strlen($number)) {
                $password .= $number;
                $passwordLength -= strlen($number);
            }
        }

        return $password;
    }
}