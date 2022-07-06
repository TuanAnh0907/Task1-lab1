<?php
    require_once("Page.php");
    require_once("Line.php");
    $document = "sample.xml";
    
    $xml = simplexml_load_file($document);
    
    foreach ($xml->page as $text) {

        foreach ($text->text as $key) {
            
            $top = $key->attributes()['top'];
            $left = $key->attributes()['left'];
            $width = $key->attributes()['width'];
            $height = $key->attributes()['height'];
            $font = $key->attributes()['font'];
            $valueString = $key->__toString();
            
            $line = new Line($top, $left, $width, $height, $font, $valueString );
            $arr[] = $line;
        }
        
        $number = $text->attributes()['number'];
        $position = $text->attributes()['position'];
        $top = $text->attributes()['top'];
        $left = $text->attributes()['left'];
        $height = $text->attributes()['height'];
        $width = $text->attributes()['width'];

        $page = new Page($number,$position, $top, $left, $height, $width, $arr);

        echo $page->getHtml();
        
        die();  

    }

?>