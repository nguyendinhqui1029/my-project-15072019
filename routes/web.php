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
<<<<<<< HEAD
Route::get('/lienhe-gopy',"LienHeGopYController@lienhegopy" );
=======
Route::get('/nha-dat-ban',"NhaDatBanController@nhadatban" );
>>>>>>> 53cfb729a5ec476642c65a932eb4360f0a17744e

Route::get('locale/{locale}', function($locale){
    Session::put('locale',$locale);
    return  redirect()->back();
});
<<<<<<< HEAD
Route::get('/nha-dat-ban', function () {
    return view('pages.nha-dat-ban');
});

=======


// trang nhà mua giới
>>>>>>> 53cfb729a5ec476642c65a932eb4360f0a17744e
