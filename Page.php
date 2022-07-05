<?php
    include_once ("Font.php");
    include_once ("Text.php");
    class Page{

        public $xml;

        public function __construct(string $document)
        {
            $this->xml = simplexml_load_file($document);
        }

        public function xmlPage(){
            
            $text = new Text();
            
            foreach ($this->xml->page as $key) {
                
                $number = $key->attributes()['number'];
                $display = "<div data-page = ". $number ." style=''><br>
                <p> Page ". $number ." </p><br>";

                // echo $text->xmlText($key);
                foreach ($key->text as $value){
    
                    echo $text->xmlText($value);
                }
            }
            return $display;
        }

        public function getPosition(){
            foreach ($this->xml->page as $key){
                $position =  $key->attributes()['position'];
            }
            return $position;
        }
         
    };
?>