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
        private $lines;
        private $fonts;

        public function __construct($number, $position, $top, $left, $height, $width, $lines, $fonts = [])
        {
            $this->number = $number;
            $this->position = $position;
            $this->top = $top;
            $this->left = $left;
            $this->height = $height;
            $this->width = $width;
            $this->lines = $lines;
            $this->fonts = $fonts;
        }

        public function getHtml(){
            foreach ($this->lines as $value) {
                # code...
                $arrLine[] = $value->getHtml();

            }
            return "<div>". implode(" ",$arrLine). "</div>";
        }

    };
?>