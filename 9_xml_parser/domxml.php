<?php
$xmlDoc = new DOMDocument();
$xmlDoc->load("test.xml");
//print $xmlDoc->saveXML();
$x = $xmlDoc->documentElement;
foreach ($x->childNodes AS $item)
 {
 print $item->nodeName . " = " . $item->nodeValue . "<br />";
 }
?>