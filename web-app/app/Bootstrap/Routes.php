<?php

return FastRoute\simpleDispatcher(function (FastRoute\RouteCollector $r) {
    $namespace = '\App\Controllers\\';

    $r->addRoute('GET', '/', $namespace . 'PasswordController@index');
    $r->addRoute('POST', '/result', $namespace . 'PasswordController@show');
});