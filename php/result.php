<?php
    header('Content-Type: application/json');
    $content = file_get_contents("php://input");
    $decodedContent = json_decode($content, true);
    $encodedContent = json_encode($decodedContent, JSON_FORCE_OBJECT);
    echo $encodedContent;
?>