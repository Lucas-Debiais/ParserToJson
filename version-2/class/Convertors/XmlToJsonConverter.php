<?php

require_once('ToJson.php');

class XmlToJsonConverter extends ToJson
{
    public function convert()
    {
        $xml = stream_get_contents($this->file);
        $xml_json = simplexml_load_string($xml);
        return json_encode($xml_json);
    }
}