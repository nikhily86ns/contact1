<?php

use Illuminate\Http\Request;

Route::group(['namesapce'=> 'ankit1\contact1\Http\Controllers'], function(){

    Route::get('contact','ankit1\contact1\Http\Controllers\ContactController@index')->name('contact');
    
    Route::post('contactsubmit', 'ankit1\contact1\Http\Controllers\ContactController@send')->name('contactsubmit');

});