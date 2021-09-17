<?php

use Illuminate\Support\Facades\Route;

Route::put('acount/{id}/balance', 'AcountController@updateAmount')->middleware('auth:api')
    ->where(['id' => '[0-9]+',]);

Route::resource('acount', AcountController::class, ['middleware' => ('auth:api')]);
