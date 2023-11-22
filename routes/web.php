<?php
declare(strict_types=1);

use Illuminate\Support\Facades\Route;

Route::get('{react}', function () {
    return view('index');
})->where('react', '^((?!api).)*$');
