<?php
$dom=new domDocument;
$dom->loadXML("<note><to>Tove</to><from>Jani</from></note>");
$x=simplexml_import_dom($dom);
echo $x->from;
?> 