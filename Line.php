<?php
    class Line{
        private $top;
        private $left;
        private $width;
        private $height;
        private $font;
        private $valueString;

        public function getTop()
        {
            return $this->top;
        }

        public function getLeft()
        {
            return $this->left;
        }

        public function getWidth()
        {
            return $this->width;
        }

        public function getHeight()
        {
            return $this->height;
        }
        public function getFont()
        {
            return $this->font;
        }
        public function getValue()
        {
            return $this->valueString;
        }

        public function setTop($top){
            $this->top = $top;
        }

        public function setLeft($left){
            $this->left = $left;
        }

        public function setWidth($width){
            $this->width = $width;
        }

        public function setHeight($height){
            $this->height = $height;
        }

        public function setFont($font){
            $this->font = $font;
        }

        public function setValue($valueString){
            $this->valueString = $valueString;
        }
    }
?>