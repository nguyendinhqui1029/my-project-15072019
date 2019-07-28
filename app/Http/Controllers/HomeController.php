<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Classes\BoxRightMaster;
use App\Classes\DataBoxRight;
use App\Classes\BoxDuAnNoiBat;
use App\Classes\DataCard;
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
       $listData =[
           new DataCard("This is a generator for text fonts of the cool variety. I noticed people were trying to find a generator like fancy letters, but were ending up on actual font sites ... This is a generator for text fonts of the cool variety. I noticed people were trying to find a generator like fancy letters, but were ending up on actual font sites ...","#","Cool Fancy Text Generator - Cool Fonts & Stylish Letters, Symbols ","anh-noi-bat.png","alt"),
           new DataCard("This is a generator for text fonts of the cool variety. I noticed people were trying to find a generator like fancy letters, but were ending up on actual font sites ...","#","Cool Fancy Text Generator, Symbols","anh-noi-bat.png","alt"),
           new DataCard("This is a generator for text fonts of the cool variety. I noticed people were trying to find a generator like fancy letters, but were ending up on actual font sites ...","#"," Cool Fonts & Stylish Letters, Symbols","anh-noi-bat.png","alt"),
           new DataCard("This is a generator for text fonts of the cool variety. I noticed people were trying to find a generator like fancy letters, but were ending up on actual font sites ...","#"," Cool Fonts & Stylish Letters, Symbols","anh-noi-bat.png","alt"),
           new DataCard("This is a generator for text fonts of the cool variety. I noticed people were trying to find a generator like fancy letters, but were ending up on actual font sites ...","#"," Cool Fonts & Stylish Letters, Symbols","anh-noi-bat.png","alt")
       ];
    
        $var= \View::make('pages.home',["boxright" => new BoxRightMaster("bx",'1','2','3','4','5','6',$ds),
        "boxright1" => new BoxRightMaster("bx",'1','2','3','4','5','6',$ds2),
        "boxClass"=>new BoxDuAnNoiBat(),"listData"=> $listData]);
        return $var;
    }
}
