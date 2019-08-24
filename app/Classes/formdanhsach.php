<?php
    namespace App\Classes;
    class FormDanhSach{

        public $classContainerFormDanhSach;
        public $classContenttieude;
        public $classContainerHinhAnh;
        public $classContainerNoiDung;
        public $classContainerDanhGia;
        
        function __construct(
            $classContainerFormDanhSach="formdanhsach",
            $classContenttieude =" tittell",
            $classContainerHinhAnh =" col-2 col-md-2 col-lg-2",
            $classContainerNoiDung =" col-10 col-md-10 col-lg-10 contennd",
            $classContainerDanhGia =" col-12 col-md-12 col-lg-12"
            
            )
        {
            $this->classContainerFormDanhSach = $classContainerFormDanhSach;
            $this->classContenttieude = $classContenttieude;
            $this->classContainerHinhAnh = $classContainerHinhAnh;
            $this->classContainerNoiDung = $classContainerNoiDung;
            $this->classContainerDanhGia = $classContainerDanhGia;
            
        }
        
    }
