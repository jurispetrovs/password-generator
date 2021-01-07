<?php

namespace App\Controllers;

use App\Services\GenerateNumbersService;
use App\Services\GeneratePasswordService;
use App\Services\GetPalindromeNumbersService;
use App\Services\GetPrimeNumbersService;

class PasswordController
{
    public function index()
    {
        return require_once __DIR__ . '/../../resources/views/index.view.php';
    }

    public function show()
    {
        $data = $_POST;

        $numbersList = (new GenerateNumbersService())->execute($data['maxNumber']);
        $primeNumbers = (new GetPrimeNumbersService())->execute($numbersList);
        $palindromeNumbers = (new GetPalindromeNumbersService())->execute($numbersList);

        $password = (new GeneratePasswordService())->execute($primeNumbers, $data['maxPasswordLength']);

        return require_once __DIR__ . '/../../resources/views/result.view.php';
    }
}