<?php

namespace App\Http\Controllers;

class DangNhapController extends Controller
{
   public function dangnhap(){
    
        $var= \View::make('pages.dang-nhap',[
        ]);
        return $var;
    }
    
}