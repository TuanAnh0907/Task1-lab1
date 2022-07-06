<?php
    require_once("Line.php");
    require_once("Font.php");

    class Page{

        private $number;
        private $position;
        private $top;
        private $left;
        private $height;
        private $width;

        public function setNumber($number){
            $this->number = $number;
        }

        public function setPosition($position){
            $this->position = $position;
        }

        public function setTop($top){
            $this->top = $top;
        }

        public function setLeft($left){
            $this->left = $left;
        }

        public function setHeight($height){
            $this->height = $height;
        }

        public function setWidth($width){
            $this->width = $width;
        }

        public function getNumber()
        {
            return $this->number;        
        }
            
        public function getPosition()
        {
            return $this->position;        
        }

        public function getTop()
        {
            return $this->top;        
        }
            
        public function getLeft()
        {
            return $this->left;        
        }

        public function getHeight()
        {
            return $this->height;        
        }
        
        public function getWidth()
        {
            return $this->width;        
        }

    };
?>