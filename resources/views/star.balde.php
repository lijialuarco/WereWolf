<<?php
// Instantiate new DOMDocument object
$svg = new DOMDocument();
// Load SVG file from public folder
$svg->load(public_path('index.svg'));
// Add CSS class (you can omit this line)
$svg->documentElement->setAttribute("class", "star");
// Echo XML without version element
echo $svg->saveXML($svg->documentElement);
?>