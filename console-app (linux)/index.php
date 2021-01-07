<?php

require_once 'app/Controllers/PasswordController.php';

use App\Controllers\PasswordController;

if ($argc > 2) {
    if ($argv[1] >= 10 && $argv[2] >= 4) {
        $data['maxNumber'] = (int)$argv[1];
        $data['maxPasswordLength'] = (int)$argv[2];

        (new PasswordController())->generate($data);

    } else {
        echo 'Invalid input !' . PHP_EOL;
    }
} else {
    while (true) {
        $data['maxNumber'] = (int)readline('Please enter max list number: ');

        if ($data['maxNumber'] >= 10) {
            break;
        }
        echo 'Please enter a value greater than or equal to 10' . PHP_EOL;
    }
    while (true) {
        $data['maxPasswordLength'] = (int)readline('Please enter max password length: ');

        if ($data['maxPasswordLength'] >= 4) {
            break;
        }
        echo 'Please enter a value greater than or equal to 4' . PHP_EOL;
    }

    (new PasswordController())->generate($data);
}