<?php

use Dashkit\Authenticate;
use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'dashkit', 'namespace' => 'Dashkit', 'middleware' => Authenticate::class], function () {

    Route::get('/', 'Controller@all');

});