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
   function __construct($data,$classContainer=" d-flex flex-column bd-highlight mb-3",
    $classBoxTitle=" p-2 bd-highlight",
    $classTitle ="",
    $contentTitle="Liên kết nổi bật",
    $classBoxData="col-lg-6",
    $classLinkData="p-2 bd-highlight"
    ){
        $this->classContainer =$classContainer;
        $this->classBoxTitle = $classBoxTitle;
        $this->classTitle = $classTitle;
        $this->contentTitle =$contentTitle;
        $this->classBoxData =$classBoxData;
        $this->classLinkData = $classLinkData;
        $this->data=$data;
    }
} 
