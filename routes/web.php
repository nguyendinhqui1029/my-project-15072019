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
    return view('pages.home');
});

Route::get('/du-an', function () {
    return view('pages.project');
});

Route::get('locale/{locale}', function($locale){
    Session::put('locale',$locale);
    return  redirect()->back();
});