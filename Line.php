<?php
    class Line{
        private $top;
        private $left;
        private $width;
        private $height;
        private $font;
        private $valueString;

        public function __construct($top,$left,$width,$height,$font,$valueString = "")
        {
            $this->top = $top;
            $this->left = $left;
            $this->width = $width;
            $this->height = $height;
            $this->font = $font;
            $this->valueString = $valueString;
        }

        public function getValue()
        {
            return $this->valueString;
        }

        public function getHtml(){
            return "<p  >".$this->getValue()."</p>";
        }
    }
?>