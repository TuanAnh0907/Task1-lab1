<?php
    require_once("Page.php");
    require_once("Line.php");
    $document = "sample.xml";
    
    $xml = simplexml_load_file($document);
    
    foreach ($xml->page as $value) {

        foreach ($value->text as $key) {
            
            $top = $key->attributes()['top'];
            $left = $key->attributes()['left'];
            $width = $key->attributes()['width'];
            $height = $key->attributes()['height'];
            $font = $key->attributes()['font'];
            $valueText = $key->__toString();
            
            $line = new Line($top, $left, $width, $height, $font, $valueText );
            $arr[] = $line;
            
        }
        
        $number = $value->attributes()['number'];
        $position = $value->attributes()['position'];
        $top = $value->attributes()['top'];
        $left = $value->attributes()['left'];
        $height = $value->attributes()['height'];
        $width = $value->attributes()['width'];
        
        $page = new Page($number,$position, $top, $left, $height, $width, $arr);
        
        unset($arr);
        
        echo $page->getHtml();
        
        // var_dump($page);
        // die();
    }
?>