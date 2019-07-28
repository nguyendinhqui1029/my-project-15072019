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
Route::get('/', 'HomeController@home');

Route::get('/du-an', function () {
    return view('pages.project');
});
<<<<<<< HEAD

=======
// trang nhà mua giới
Route::get('/nha-moi-gioi', function () {
    return view('pages.nhamoigioi');
});
>>>>>>> 124cfd0027d9897765bd2359d6e7671f058d5a53
Route::get('locale/{locale}', function($locale){
    Session::put('locale',$locale);
    return  redirect()->back();
});
<<<<<<< HEAD

=======
>>>>>>> 124cfd0027d9897765bd2359d6e7671f058d5a53
