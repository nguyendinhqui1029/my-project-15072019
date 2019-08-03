<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Classes\BoxRightMaster;
use App\Classes\DataBoxRight;
use App\Classes\BoxDuAnNoiBat;
use App\Classes\DataCard;
class HomeController extends Controller
{
    // function home(){
    //     $this->docJson();
    //     return \view('pages.home');
    // }
    // function docJson()
    // {
    //     $arr1 =json_decode(file_get_contents('../resources/lang/en.json'));
    //     $arr2 =json_decode(file_get_contents('../resources/lang/vi.json'));
    //     $arrkey = [];
    //     $arrvalue =[];
    //     $i=0;
    //         foreach ($arr2 as $key1 => $value1) {
                
    //             $arrkey[$i] =$key1;
    //             $i =$i+1;
    //         }
    //     $i=0;
    //         foreach ($arr1 as  $value) {
    //             $arrvalue[$i] =$value;
    //             $i =$i+1;
    //         }
    //     file_put_contents("../resources/lang/en.json", json_encode(array_combine($arrkey, $arrvalue)));
    // }

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