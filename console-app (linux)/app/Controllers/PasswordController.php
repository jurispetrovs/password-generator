<?php

namespace App\Controllers;

require_once 'app/Services/GenerateNumbersService.php';
require_once 'app/Services/GeneratePasswordService.php';
require_once 'app/Services/GetPalindromeNumbersService.php';
require_once 'app/Services/GetPrimeNumbersService.php';

use App\Services\GenerateNumbersService;
use App\Services\GeneratePasswordService;
use App\Services\GetPalindromeNumbersService;
use App\Services\GetPrimeNumbersService;


class PasswordController
{
    public function generate($data)
    {
        $numbersList = (new GenerateNumbersService())->execute($data['maxNumber']);
        echo 'Number list: ' . implode(', ', $numbersList) . PHP_EOL;

        $primeNumbers = (new GetPrimeNumbersService())->execute($numbersList);
        echo 'Prime numbers: ' . implode(', ', $primeNumbers) . PHP_EOL;

        $palindromeNumbers = (new GetPalindromeNumbersService())->execute($numbersList);
        echo 'Palindrome numbers: ' . implode(', ', $palindromeNumbers) . PHP_EOL;

        $password = (new GeneratePasswordService())->execute($primeNumbers, $data['maxPasswordLength']);
        echo 'Password: ' . $password . PHP_EOL;
    }
}