<?php
error_reporting(E_ALL);
ini_set('display_errors', true);

require 'tiu/sinonim.php';
// More require if necessary

/**
 * Obtain data from filename as an array.
 *
 * @param string $filename The location of csv file.
 * @return array an array of lines from csv.
 */
function readDataRef($filename){
    $csvData = [];
    $fileRef = fopen($filename,"r");

    if ($fileRef === false){
        die("Cannot open the file " . $filename . "!");
    }
    while (($row = fgetcsv($fileRef)) !== false){
        $csvData[] = $row;
    }    
    fclose($fileRef);
    return $csvData;
}

/**
 * Check if text is equal to data recorded in filename. Return true if match found, otherwise return false.
 *
 * @param string $filename The location of csv file.
 * @param string $text Text to be evaluated.
 * @return boolean Return true if an exact match is found.
 */
function checkDataRef($filename, $text){
    $csvData = readDataRef($filename);
    for ($i=0; $i < count($csvData); $i++) { 
        for ($j=0; $j < count($csvData[$i]); $j++) { 
            if($csvData[$i][$j] === $text){
                return true;
            }
        }
    }
    return false;
}
?>