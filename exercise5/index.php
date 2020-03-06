<?php

$xmlFile = 'sample.xml';

if (file_exists($xmlFile)) {
    $xmlFile = simplexml_load_file($xmlFile);
    $csvFile = fopen('sample.csv', 'w');
    createCsv($xmlFile, $csvFile);
    fclose($csvFile);
}

function createCsv($xml, $csvFile)
{

    foreach ($xml->children() as $item) {

        $hasChild = (count($item->children()) > 0) ? true : false;

        if (!$hasChild) {
            $put_arr = array($item->getName(), $item);
            fputcsv($csvFile, $put_arr, ',', '"');
        } else {
            createCsv($item, $csvFile);
        }
    }
}
