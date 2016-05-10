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

Route::get('/', 'NccuController@index');
Route::get('/info_1', 'NccuController@info_1');
Route::get('/info_2', 'NccuController@info_2');
Route::get('/info_3', 'NccuController@info_3');
Route::get('/info_4', 'NccuController@info_4');
Route::get('/info_5', 'NccuController@info_5');
Route::get('/info_6', 'NccuController@info_6');
Route::get('/info_7', 'NccuController@info_7');
Route::get('/info_8', 'NccuController@info_8');
Route::get('/info_9', 'NccuController@info_9');
Route::get('/info_10', 'NccuController@info_10');
Route::get('/info_11', 'NccuController@info_11');
Route::get('/info_12', 'NccuController@info_12');
Route::get('/info_13', 'NccuController@info_13');
Route::get('/info_14', 'NccuController@info_14');
Route::get('/info_15', 'NccuController@info_15');




// Route::get('/', function () {
//     return view('home/home');
// });

Route::get('/full_info', function () {
    return view('info/full_info');
});

Route::get('/half_info', function () {
    return view('info/half_info');
});

Route::get('/gallery_info', function () {
    return view('info/gallery_info');
});
