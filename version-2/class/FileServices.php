<?php

require_once('Convertors/CsvToJsonConverter.php');
require_once('Convertors/XmlToJsonConverter.php');

class FileServices
{
    private $file;
    public $result;

    public function __construct($file)
    {
        $this->file = $file;
    }

    public function toJson()
    {
        $openFile = fopen($this->file['tmp_name'], "r");

        if ($this->file['type'] === 'text/csv') {
            $converter = new CsvToJsonConverter($openFile);
            $this->result = $converter->convert();
        } else if ($this->file['type'] === 'text/xml') {
            $converter = new XmlToJsonConverter($openFile);
            $this->result = $converter->convert();
        }
    }
}