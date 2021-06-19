<?php
namespace App\Classes;
class ContentMaster{
    public $isClassContainerRow;
    public $classCssContainerRow;
    public $listUrlComponent;
    function __construct($isClassContainerRow = false,
        $classCssContainerRow = "",
        $listUrlComponent = []

    ){
        $this->isClassContainerRow=$isClassContainerRow;
        $this->classCssContainerRow=$classCssContainerRow;
        $this->listUrlComponent=$listUrlComponent;
    }
}