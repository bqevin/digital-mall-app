<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return  View('chose');
});

Route::get('/shop', function () {
    return  View('home');
});

Route::get('/most', function () {
    return  View('most');
});

Route::get('/welcome', function () {
    return 'welcome to Laravel';
});
