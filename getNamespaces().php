<?php
$xml=<<<XML
<?xml version="1.0" standalone="yes"?>
<cars xmlns:c="http://w3schools.com/ns" xmlns:a="http://w3schools.com/country">
  <c:car id="1">Volvo</c:car>
  <c:car id="2">BMW</c:car>
  <c:car id="3">Saab</c:car>
</cars>
XML;

$sxe=new SimpleXMLElement($xml);
$ns=$sxe->getNamespaces(true);
var_dump($ns);
?> 