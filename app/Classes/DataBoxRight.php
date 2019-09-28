<?php
namespace App\Classes;
class DataBoxRight{
    public $noidung;
    public $link;
    public $trangthai;
    function __construct($noidung,$link,$trangthai=''){
        $this->noidung = $noidung;
        $this->link= $link;
        $this->trangthai= $trangthai;
    }
}