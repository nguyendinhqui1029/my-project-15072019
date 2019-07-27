<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Classes\BoxRightMaster;
use App\Classes\DataBoxRight;
use App\Classes\BoxDuAnNoiBat;
class HomeController extends Controller
{
   public function home(){
       $ds = [
           new DataBoxRight("aaabbb","aaabb"),
           new DataBoxRight("aaa","aaa"),
           new DataBoxRight("aaa","aaa"),
           new DataBoxRight("aaa","aaa"),
           new DataBoxRight("aaa","aaa"),
           new DataBoxRight("aaa","aaa")
       ];
       $ds2 = [
        new DataBoxRight("aaabbb","aaabb"),
        new DataBoxRight("aaassss","aaassss"),
        new DataBoxRight("aaa","aaa"),
        new DataBoxRight("aaa","aaa"),
        new DataBoxRight("aaa","aaa"),
        new DataBoxRight("aaa","aaa")
    ];
       
    
        $var= \View::make('pages.home',["boxright" => new BoxRightMaster("bx",'1','2','3','4','5','6',$ds),
        "boxright1" => new BoxRightMaster("bx",'1','2','3','4','5','6',$ds2),
        "boxClass"=>new BoxDuAnNoiBat()]);
        return $var;
    }
}
