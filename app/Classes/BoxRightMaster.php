<?php
namespace App\Classes;
use App\Classes\DataBoxRight;
class BoxRightMaster{
   public $id;
   public $classContainer;
   public $classBoxTitle;
   public $classTitle;
   public $contentTitle;
   public $classBoxData;
   public $classLinkData;
   public $data = [];
   function __construct($id,$classContainer,
    $classBoxTitle,
    $classTitle,
    $contentTitle,
    $classBoxData,
    $classLinkData,
    $data){
        $this->id =$id;
        $this->classContainer =$classContainer;
        $this->classBoxTitle = $classBoxTitle;
        $this->classTitle = $classTitle;
        $this->contentTitle =$contentTitle;
        $this->classBoxData =$classBoxData;
        $this->classLinkData = $classLinkData;
        $this->data=$data;
    }
} 
