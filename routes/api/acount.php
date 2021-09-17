<?php

use Illuminate\Support\Facades\Route;

// Route::group(['middleware' => ['permission:destroy_notes']], function () {
//     Route::get('notes/{id}/destroy', 'NotesController@destroy')->name('notes.destroy');
// });

// Route::group(['prefix' => 'acount', 'middleware' => ('auth:api')], function () {
//'permission:create_acount'
// Route::middleware('auth:api',)
//     ->post('/', 'AcountController@store');
// });
Route::resource('acount', AcountController::class, ['middleware' => ('auth:api')]);
