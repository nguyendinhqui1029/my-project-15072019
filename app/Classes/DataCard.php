<?php
namespace App\Classes;
class DataCard{
    public $content;
    public $link;
    public $title;
    public $image;
    public $alt;
    function __construct(
         $content,
         $link,
         $title,
         $image,
         $alt
    ){
        $this->content= $content;
        $this->link= $link;
        $this->title= $title;
        $this->image= $image;
        $this->alt= $alt;
    }
}