

<?php
$dom = new domDocument; 

$dom->loadXML("sample.xml"); 

$tables = $dom->getElementsByTagName('page'); 

print_r($tables);

?>