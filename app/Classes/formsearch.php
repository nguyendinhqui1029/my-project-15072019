<?php
    namespace App\Classes;
    class FormSearch {

        public $classContainerFormSearch;
        public $classContainerDiaDiem;
        public $classContainerLoaiTin;
        public $classContainerQuanHuyen;
        public $classContainerMucGia;
        public $classContainerHuong;
        public $classContainerButtonSearch;
        function __construct(
            $classContainerFormSearch="form-search form-search-centre",
            $classContainerDiaDiem ="row justify-content-start",
            $classContainerLoaiTin ="row justify-content-start",
            $classContainerQuanHuyen ="row justify-content-start",
            $classContainerMucGia ="row justify-content-start",
            $classContainerHuong ="row justify-content-start",
            $classContainerButtonSearch ="row justify-content-centre"
            )
        {
            $this->classContainerFormSearch = $classContainerFormSearch;
            $this->classContainerDiaDiem = $classContainerDiaDiem;
            $this->classContainerLoaiTin = $classContainerLoaiTin;
            $this->classContainerQuanHuyen =$classContainerQuanHuyen;
            $this->classContainerMucGia = $classContainerMucGia;
            $this->classContainerHuong =$classContainerHuong;
            $this->classContainerButtonSearch =$classContainerButtonSearch;
        }
        
    }
