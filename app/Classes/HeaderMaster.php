<?php
namespace App\Classes;
class HeaderMaster{
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