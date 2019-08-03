<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    function home(){
        $this->docJson();
        return \view('pages.home');
    }
    function docJson()
    {
        $arr1 =json_decode(file_get_contents('../resources/lang/en.json'));
        $arr2 =json_decode(file_get_contents('../resources/lang/vi.json'));
        $arrkey = [];
        $arrvalue =[];
        $i=0;
            foreach ($arr2 as $key1 => $value1) {
                
                $arrkey[$i] =$key1;
                $i =$i+1;
            }
        $i=0;
            foreach ($arr1 as  $value) {
                $arrvalue[$i] =$value;
                $i =$i+1;
            }
        file_put_contents("../resources/lang/en.json", json_encode(array_combine($arrkey, $arrvalue)));
    }
}