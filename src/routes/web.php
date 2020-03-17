<?php

use Illuminate\Support\Facades\Route;

Route::group(['namespace' => 'Laravelstudio\Contact\Http\Controllers'], function () {
    Route::get('contact', 'ContactController@index')->name('contact.index');
    Route::post('contact', 'ContactController@send')->name('contact.send');
});
