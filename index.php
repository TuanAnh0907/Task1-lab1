<?php
    include_once("Page.php");

    $document = "sample.xml";

    $page = new Page($document);

    ?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <style>
               body{
                position: <?php echo $page->getPosition() ?>;
               } 
        </style>
</head>
<body>
    <?php
        echo $page->xmlPage();
    ?>
</body>S
</html>