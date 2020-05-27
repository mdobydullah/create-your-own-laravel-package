<?php

use Illuminate\Support\Facades\Route;
use Mynotepaper\Greeter\Greet;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/greet/{name}', function ($name) {
    $greet = new Greet();

    return $greet->greet($name);
});
