<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something gr*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/lid', function () {
    return view('lid');
});

Route::get('/zwerm', function () {
    return view('zwerm');
});

Route::get('/meld', function () {
    return view('meld');
});

Route::get('/wespen', function () {
    return view('wespen');
});

Route::get('/bijen', function () {
    return view('bijen');
});

Route::get('/rooster', function () {
    return view('rooster');
});

Route::get('/tips', function () {
    return view('tips');
});

Route::get('/vereniging', function () {
    return view('vereniging');
});

Route::get('/bezittingen', function () {
    return view('bezittingen');
});


Route::get('/bijenteelt', function () {
    return view('bijenteelt');
});

Route::get('/activiteiten', function () {
    return view('activiteiten');
});

Route::get('/cursussen', function () {
    return view('cursussen');
});

Auth::routes();

Route::get('/beheer', 'BeheerController@index')->name('beheer');
