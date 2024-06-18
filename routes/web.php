<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return ["Murlani" => "1.0", "laravel" => app()::VERSION];
});
