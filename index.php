<?php
    require_once("Page.php");
    require_once("Line.php");
    $document = "sample.xml";
    
    $xml = simplexml_load_file($document);
    
    foreach ($xml->page as $value) {
        $page = setPage($value);

        echo "<p> Page ". $page->getNumber() .": </p>";

        foreach ($value->text as $key) {
            $line = setLine($key);
            showText($line);
        }
    }

    function setPage($text){
        $page = new Page;
        $page->setNumber($text->attributes()['number']);
        $page->setPosition($text->attributes()['position']);
        $page->setTop($text->attributes()['top']);
        $page->setLeft($text->attributes()['left']);
        $page->setHeight($text->attributes()['height']);
        $page->setWidth($text->attributes()['width']);
        return $page; 
    }

    function setLine($text){
        $line = new Line();
        $line->setTop($text->attributes()['top']);
        $line->setLeft($text->attributes()['left']);
        $line->setWidth($text->attributes()['width']);
        $line->setHeight($text->attributes()['height']);
        $line->setFont($text->attributes()['font']);
        $line->setValue($text->__toString());
        return $line; 
    }

    function showText($text){
        echo "<p > ". $text->getValue() ." </p>";
    }

?>