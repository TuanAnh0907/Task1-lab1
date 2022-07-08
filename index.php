<?php
    require_once("Page.php");
    require_once("Line.php");
    $document = "sample.xml";
    
    $xml = simplexml_load_file($document); 
    
    foreach ($xml->children() as $page) {

        foreach ($page->children() as $text) {
            
            $topLine = $text->attributes()['top'];
            $leftLine = $text->attributes()['left'];
            $widthLine = $text->attributes()['width'];
            $heightLine = $text->attributes()['height'];
            $fontLine = $text->attributes()['font'];

            if($text->count()){
                $child_text = $text->children();
                $textLine = $child_text->saveXML(); 
            }else{
                $textLine = $text->__toString();
            }
            $line = new Line($topLine, $leftLine, $widthLine, $heightLine, $fontLine, $textLine );
            $arrLine[] = $line;
        }
        
        $numberPage = $page->attributes()['number'];
        $positionPage = $page->attributes()['position'];
        $topPage = $page->attributes()['top'];
        $leftPage = $page->attributes()['left'];
        $heightPage = $page->attributes()['height'];
        $widthPage = $page->attributes()['width'];
        
        $page = new Page($numberPage, $positionPage, $topPage, $leftPage, $heightPage, $widthPage, $arrLine);
        
        unset($arrLine);

        echo $page->getHtml();
    }
?>
    
