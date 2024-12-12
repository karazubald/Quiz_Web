<?php
error_reporting(E_ALL);
ini_set('display_errors', true);

//-----------------------------------------------------
// TODO: Load items here!
// Items to be loaded
$items = readDataRef("../data/items/tiu/analogi.json");
//-----------------------------------------------------

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
    echo '<script>console.log('.$jsonData.')</script>';
    
    array_merge($jsonData, $associativeArrayData);
    $jsonData = json_encode($jsonData);
    $overwrittenContent = file_put_contents($fileRef, $jsonData);
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

/**
 * Create an associative array containing variables for mathematical operation.
 *
 * @param integer $size The number of variable inside variable map. Must be between 3 to 26. If no argument passed, the defult value 3 will be used.
 * @return array An asscoative array of with each variable value set to 0.
 */ 
function createVariableArray($size = 3){
    if ($size < 3) $size = 3;
    if ($size > 26) return "Error, must not exceed 26!";
    $alphabets = ['a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z'];
    $variableMap = array();
    for ($i=0; $i < $size; $i++) {
        $variableMap[$alphabets[$i]] = 0; 
    }
    return $variableMap;
}
/**
 * Return the greatest common divisor of $a and $b.
 *
 * @param integer|float $a a number either integer or float.
 * @param integer|float $b a number either integer of float.
 * @return integer|float a number representing the greatest common divisor of $a and $b.
 */
function gcd($a, $b){
    if ($b === 0){
        return $a;
    }
    return gcd($b, $a % $b);
}
/**
 * Check if a number is prime.
 * 
 * @param integer $n a positive number.
 * @return boolean return true if n is an actual prime number.
 */
function isPrime($n){
    if($n <= 1){
        return false;
    }

    for ($i = 2; $i <= sqrt($n); $i++) { 
        if ($n % $i == 0) { 
            return false; 
        } 
    }

    return true;
}
?>