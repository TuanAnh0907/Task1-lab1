<?php
    require __DIR__ . '/../vendor/autoload.php';

    use App\Models\Document;
    use App\Models\Line;
    use App\Models\Page;
    use App\Models\Font;

    $file = '../sample.xml';
    
    $xml = simplexml_load_file($file); 

    foreach ($xml->children() as $page) {

        foreach ($page->children() as $child_node) {

            if ($child_node->getName() == 'text') {

                # code...
                $topLine = $child_node->attributes()['top'];
                $leftLine = $child_node->attributes()['left'];
                $widthLine = $child_node->attributes()['width'];
                $heightLine = $child_node->attributes()['height'];
                $fontLine = $child_node->attributes()['font'];
                
                if($child_node->count()){
                    $child_text = $child_node->children();
                    $textLine = $child_text->saveXML(); 
                }else{
                    $textLine = $child_node->__toString();
                }

                $line = new Line($topLine, $leftLine, $widthLine, $heightLine, $fontLine, $textLine );
                $arrLine[] = $line;
                
            }elseif($child_node->getName() == 'fontspec'){

                # code...
                $id = $child_node->attributes()['id'];
                $size = $child_node->attributes()['size'];
                $family = $child_node->attributes()['family'];
                $color = $child_node->attributes()['color'];

                $font = new Font($id, $size, $family, $color);
                $arrFont[] = $font;

            }
        }   
        
        $numberPage = $page->attributes()['number'];
        $positionPage = $page->attributes()['position'];
        $topPage = $page->attributes()['top'];
        $leftPage = $page->attributes()['left'];
        $heightPage = $page->attributes()['height'];
        $widthPage = $page->attributes()['width'];
        
        $page = new Page($numberPage, $positionPage, $topPage, $leftPage, $heightPage, $widthPage, $arrLine, $arrFont);

        $arrPage[] = $page;
        
        unset($arrLine);
        unset($arrFont);

        // echo $page->getHtml();
    }

    $document = new Document($arrPage);
    $document->showHtml();

?>
    
