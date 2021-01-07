<?php

namespace App\Services;

class GenerateNumbersService
{
    public function execute($maxNumber)
    {
        return range(1, $maxNumber);
    }
}