<?php
error_reporting(E_ALL);
ini_set('display_errors', true);

// Items to be loaded
$items = readDataRef("../data/items/tiu/sinonim.json");

/**
 * Obtain data from filename as an array.
 *
 * @param string $filename The location of json file.
 * @return array an associative array.
 */
function readDataRef($filename){
    $directoryRef = __DIR__;
    $fileRef = file_get_contents($directoryRef.'/'.$filename);
    $jsonData = json_decode($fileRef, true);
    return $jsonData;
}

/**
 * Add associative array to specific json file.
 *
 * @param array $associativeArrayData Associative array.
 * @param string $filename The location of json file.
 * @return void
 */
function writeDataRef($associativeArrayData, $filename){
    $directoryRef = __DIR__;
    $fileRef = file_get_contents($directoryRef.'/'.$filename);
    $jsonData = readDataRef($filename);
    
    array_merge($jsonData, $associativeArrayData);
    $jsonData = json_encode($jsonData);
    file_put_contents($fileRef, $jsonData);
}

/**
 * Check if text is equal to data recorded in filename. Return true if match found, otherwise return false.
 *
 * @param string $filename The location of json file.
 * @param string $text Text to be evaluated.
 * @return boolean Return true if an exact match is found.
 */
function checkDataRef($filename, $text){
    $jsonData = readDataRef($filename);
    foreach ($jsonData as $user) {
        foreach ($user as $userData) {
            if($userData === $text){
                return true;
            }
        }
    }

    return false;
}

/**
 * Generate random string with specific length.
 *
 * @param integer $length The length of generated string. Minimum length is 6.
 * @return string Random string.
 */
function generateRandomString($length = 6) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[random_int(0, $charactersLength - 1)];
    }
    return $randomString;
}

/**
 * Display text for log in and log out.
 *
 * @param string $session_usrname Username variable from a session
 * @return string Display log in or log out.
 */
function setLogButtonText($session_usrname){
    $text = "Session Unset";
    if($session_usrname === "Anonymous") {
        $text = "Log In";
    }
    if($session_usrname !== "Anonymous"){
        session_unset();
        $text = "Log Out";
    }
    return $text;
}
?>