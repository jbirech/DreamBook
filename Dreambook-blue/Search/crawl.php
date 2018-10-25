<?php

include_once("classes/DomDocumentParser.php");

function followLinks($url)
{
    $parser = new DomDocumentParser($url);
    $linkList = $parser->getlinks();

    foreach($linkList as $link)
    {
        $href = $link->getAttribute("href");
        echo $href . "<br>";
    }
}

$startUrl = "http://www.google.com";
followLinks($startUrl);
?>