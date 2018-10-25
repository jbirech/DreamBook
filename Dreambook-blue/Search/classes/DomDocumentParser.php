<?php
class DomDocumentParser
{
    private $doc;

    public function __construct($url)
    {
        // echo "URL: $url";
        $options = array('http'=>array('method'=>"GET", 'header'=>"User-Agent: doodleBot/0.1\n"));
        $context = stream_context_create($options);

        $this->doc = new DomDocument();
        //@supresses all the warning messages
        @$this->doc = loadHTML(file_get_contents($url, false, $context));

    }

    public function getlinks()
    {
        return $this->doc->getElementsByTagName("a");
    }
}
?>