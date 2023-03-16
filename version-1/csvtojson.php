<?php
if (isset($_POST['submit'])) {
    $file = fopen($_FILES['file']['tmp_name'], "r");
    function csvtojson($file)
    {
        $csv_headers = fgetcsv($file);
        $csv_json = array();

        while ($row = fgetcsv($file)) {
            $csv_json[] = array_combine($csv_headers, $row);
        }

        fclose($file);
        return json_encode($csv_json);
    }

    $jsonresult = csvtojson($file);

    file_put_contents('./result/pokemon.json', $jsonresult);
}