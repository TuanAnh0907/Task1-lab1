<?php
    class Line{

        private $top;
        private $left;
        private $width;
        private $height;
        private $font;
        private $valueText;

        public function __construct($top,$left,$width,$height,$font,$valueText = "")
        {
            $this->top = $top;
            $this->left = $left;
            $this->width = $width;
            $this->height = $height;
            $this->font = $font;
            $this->valueText = $valueText;
        }

        public function getValue()
        {
            return $this->valueText;
        }

        public function getHtml(){
            return "<p  >".$this->getValue()."</p>";
        }
    }
?>