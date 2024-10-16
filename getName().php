<?php
$xml=<<<XML
<?xml version="1.0" standalone="yes"?>
<cars>
  <car id="1">Volvo</car>
  <test> 
    <prueba> ew </prueba>
  </test>
  <car id="2">BMW</car>
  <car id="3">Saab</car>
</cars>
XML;

$sxe=new SimpleXMLElement($xml);
// Get the name of the cars element
echo $sxe->getName() . "<br>";

// Also print out the names of the children of the cars element
foreach ($sxe->children() as $child)
  {
  echo $child->getName() . "<br>";
  }
foreach ($sxe->test->children() as $child) {
  echo $child->getName() . "<br>";
}
?> 