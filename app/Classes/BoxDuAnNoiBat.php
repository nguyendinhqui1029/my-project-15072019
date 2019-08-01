<?php
namespace App\Classes;
class BoxDuAnNoiBat{
    public $classContainerParent;
    public $classContainerParentHeader;
    public $classContentHeader;
    public $classContainerSeeMore;
    public $classContentSeeMore;
    public $classContentImageTop;
    public $classParentCart;
    public $classContentParentCart;
    public $classContentCart;
    public $classCartImage;
    public $classImage;
    public $classCartTitle;
    public $classContent;
    function __construct(
         $classContainerParent="mt-2 mr-3",
         $classContainerParentHeader="d-flex bd-highlight bg-primary mb-1 border-box",
         $classContentHeader="p-2 flex-grow-1 bd-highlight text-white",
         $classContainerSeeMore="p-2 bd-highlight",
         $classContentSeeMore="text-white",
         $classContentImageTop="d-flex bd-highlight w-100 border-box",
         $classParentCart="row border-box",
         $classContentParentCart="col-4 col-sm-4 col-md-4 col-lg-4",
         $classContentCart="d-flex align-items-start flex-column bd-highlight mb-3",
         $classCartImage="p-2 bd-highlight",
         $classImage="cart-img",
         $classCartTitle="pl-2 bd-highlight text-center",
         $classContent="pl-2 w-100 bd-highlight text-content"
    ){
        $this->classContainerParent=$classContainerParent;
        $this->classContainerParentHeader=$classContainerParentHeader;
        $this->classContentHeader=$classContentHeader;
        $this->classContainerSeeMore=$classContainerSeeMore;
        $this->classContentSeeMore=$classContentSeeMore;
        $this->classContentImageTop=$classContentImageTop;
        $this->classParentCart=$classParentCart;
        $this->classContentParentCart=$classContentParentCart;
        $this->classContentCart=$classContentCart;
        $this->classCartImage=$classCartImage;
        $this->classImage=$classImage;
        $this->classCartTitle=$classCartTitle;
        $this->classContent=$classContent;
    }
}