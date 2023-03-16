<?php

require_once('ToJson.php');

class CsvToJsonConverter extends ToJson
{
    public function convert()
    {
        $csv_headers = fgetcsv($this->file);
        $csv_json = array();

        while ($row = fgetcsv($this->file)) {
            $csv_json[] = array_combine($csv_headers, $row);
        }

        fclose($this->file);
        return json_encode($csv_json);
    }
}