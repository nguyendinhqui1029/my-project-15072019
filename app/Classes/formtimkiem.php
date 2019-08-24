<?php
    namespace App\Classes;
    class FormTimKiem {

        public $classContainerFormTimKiem;
        public $classContainerLoaiBDS;
        public $classContainerTinhThanh;
        public $classContainerQuuanHuyen;
        public $classContainerButtonTimKiem;
        function __construct(
            $classContainerFormTimKiem="form-search form-search-centre",
            $classContainerLoaiBDS ="row justify-content-start",
            $classContainerTinhThanh ="row justify-content-start",
            $classContainerQuuanHuyen ="row justify-content-start",
            $classContainerButtonTimKiem ="row justify-content-centre"
            )
        {
            $this->classContainerFormTimKiem = $classContainerFormTimKiem;
            $this->classContainerLoaiBDS = $classContainerLoaiBDS;
            $this->classContainerTinhThanh = $classContainerTinhThanh;
            $this->classContainerQuuanHuyen =$classContainerQuuanHuyen;
            $this->classContainerButtonTimKiem =$classContainerButtonTimKiem;
        }
        
    }
