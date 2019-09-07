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
Route::get('/', "HomeController@home");


Route::get('/nha-moi-gioi',"NhaMoiGioiController@nhamoigioi" );

Route::get('/kinh-nghiem',"KinhNghiemController@kinhnghiem" );
Route::get('/mau-nha-dep',"MauNhaDepController@maunhadep" );
Route::get('/nha-dat-ban',"NhaDatBanController@nhadatban" );

Route::get('locale/{locale}', function($locale){
    Session::put('locale',$locale);
    return  redirect()->back();
});


// trang nhà mua giới