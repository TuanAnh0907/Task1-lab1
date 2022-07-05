<?php

    class Text{
        
        public function xmlText($key){

            $string = $key->__toString();

            $font = $key->attributes()->font;

            switch ($font) {
                case 0:
                    $size = "h3";
                    break;
                case 1:
                    $size = "h2";
                    break;
                default:
                    $size = "p";
                    break;
            }
            
            $display = "<".$size.">". $string ."</".$size."> ";
            
            return $display;
        }

    };
?>