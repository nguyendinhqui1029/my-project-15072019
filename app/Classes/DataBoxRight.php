<?php
namespace App\Classes;
class DataBoxRight{
    public $noidung;
    public $link;
    
    function __construct($noidung,$link){
        $this->noidung = $noidung;
        $this->link= $link;
    }
}