<?php
     class Font{

        private $xml;

        public function __construct(string $document)
        {   
            $this->xml = simplexml_load_file($document);
        }

        public function xmlFont(){
            foreach ($this->xml->page->fontspec  as $key) {
                # code...
                $id = $key->attributes()['id'];
                $size = $key->attributes()['size'];
                $family = $key->attributes()['family'];
                $color = $key->attributes()['color'];

                $display[0] = $id;
                $display[1] = $size;
                $display[2] = $family;
                $display[3] = $color;

            }
            return $display;
        }

        // public function getID($fontspec)
        // {
        //     return $fontspec->attributes()['id'];
        // }
            
        // public function getSize($fontspec)
        // {
        //     return $fontspec->attributes()['size'];
        // }

        // public function getFamily($fontspec)
        // {
        //     return $fontspec->attributes()['family'];
        // }
            
        // public function getColor($fontspec)
        // {
        //     return $fontspec->attributes()['color'];
        // }
    };
?>