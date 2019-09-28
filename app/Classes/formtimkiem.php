<?php
    namespace App\Classes;
    class FormTimKiem {

        public $classContainerFormTimKiem;
        public $classContainerDiaDiem;
        public $classContainerLoaiBDS;
        public $classContainerTinhThanh;
        public $classContainerQuuanHuyen;
        public $classContainerButtonTimKiem;
        function __construct(
            $classContainerFormTimKiem="form-search form-search-centre",
            $classContainerDiaDiem="mt-2",
            $classContainerLoaiBDS ="row justify-content-start",
            $classContainerTinhThanh ="row justify-content-start",
            $classContainerQuuanHuyen ="row justify-content-start",
            $classContainerButtonTimKiem ="row justify-content-centre"
            )
        {
            $this->classContainerDiaDiem=$classContainerDiaDiem;
            $this->classContainerFormTimKiem = $classContainerFormTimKiem;
            $this->classContainerLoaiBDS = $classContainerLoaiBDS;
            $this->classContainerTinhThanh = $classContainerTinhThanh;
            $this->classContainerQuuanHuyen =$classContainerQuuanHuyen;
            $this->classContainerButtonTimKiem =$classContainerButtonTimKiem;
        }
        
    }
