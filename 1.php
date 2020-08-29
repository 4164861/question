<?php
$xml = <<<EOD
<?xml version="1.0" ?>
<root xmlns:xi="http://www.w3.org/2001/XInclude">
 <xi:include href="file:///etc/passwd" parse="text"/>
</root>
EOD;
$dom = new DOMDocument;
// let's have a nice output
$dom->preserveWhiteSpace = false;
$dom->formatOutput = true;
$dom->loadXML($xml);
$dom->xinclude();
echo $dom->saveXML();
?>