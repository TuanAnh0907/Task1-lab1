<?php
    namespace App\Models;
     
    use App\Models\Line;

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
        
        public function getNumber(){
            return $this->number;
        }

        public function getHtml(){
            
            foreach ($this->lines as $line) {
                # code...
                
                switch ( $line->getFont()) {
                    case 0:
                        # code...
                        $tagName = "h3";
                        break;
                    case 1:
                        # code...
                        $tagName = "h2";
                        break;
                    default:
                        # code...
                        $tagName = "p";
                        break;
                }
                     
                $arrLine[] = "<".$tagName.">". $line->getText() . "</".$tagName.">";
            }

            return "<div data-page = ".$this->getNumber()." style = 'padding : 20px; margin : 10px auto; max-width: 800px;' > \n 
                    <p> Page ".$this->getNumber()."</p>\n ". implode(" ",$arrLine)."</div>";
        }

    };
?>