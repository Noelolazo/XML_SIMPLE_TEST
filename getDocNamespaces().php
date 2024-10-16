<?php
$xml=<<<XML
<?xml version="1.0" standalone="yes"?>
<cars xmlns:c="https://w3schools.com/ns">
  <c:car id="1">Volvo</c:car>
  <c:car id="2">BMW</c:car>
  <c:car id="3" a:country="Sweden" xmlns:a="https://w3schools.com/country">Saab</c:car>    
</cars>
XML;
 
$sxe=new SimpleXMLElement($xml);
$ns=$sxe->getDocNamespaces(TRUE);
var_dump($ns);
?> 