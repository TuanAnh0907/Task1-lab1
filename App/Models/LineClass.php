<?php
    namespace App\Models;

    class Line{

        private $top;
        private $left;
        private $width;
        private $height;
        private $font;
        private $textLine;

        public function __construct($top,$left,$width,$height,$font,$textLine = ""){
            $this->top = $top;
            $this->left = $left;
            $this->width = $width;
            $this->height = $height;
            $this->font = $font;
            $this->textLine = $textLine;
        }

        public function getText(){
            return $this->textLine;
        }

        public function getFont(){
            return $this->font;
        }

        public function getHtml(){
            
            return $this->getText();
        }
    }
?>