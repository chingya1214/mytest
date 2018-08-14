<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('about',function () {
    return view('about');
});

Route::get('/activity',function () {
    return view('activity');
});

/* 練習json分頁 */
Route::get('/weather',function () {
    return view('weather');
});

Route::get('/json/{id}','ArticleController@Json');
Route::get('/show','ArticleController@Show');

/* CSMU分頁 */
Route::get('/CSMU-objectives',function () {
    return view('CSMU-objectives');
});
Route::get('/CSMU-planning',function () {
    return view('CSMU-planning');
});
Route::get('/CSMU-index',function () {
    return view('CSMU-index');
});


/* test0807分頁 */
Route::get('/test0807',function () {
    return view('test0807');
});

Route::get('/json/{id}','test0807Controller@Json');
Route::get('/show2','test0807Controller@Show2');