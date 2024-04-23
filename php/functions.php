<?php
// Menampilkan dan melaporkan error
error_reporting(E_ALL);
ini_set('display_errors', 'On');

require 'tiu/sinonim.php';

enum ItemType {
    case Questions;
    case Options;
}

function generateItemRadioInput(ItemType $type){
    global $items;
    $amount = 0;
    $groupName = "";
    $radioId = "";

    switch ($type) {
        case ItemType::Questions:
            $amount = count($items);
            $groupName = "questionGroup";
            $radioId = "q";
            break;
        
        case ItemType::Options:
            $amount = count($items[0]["options"]);
            $groupName = "optionGroup";
            $radioId = "o";
            break;
    }

    for ($i=0; $i < $amount; $i++) { 
        $hiddenRadioInput = '<input type="radio", name="'.$groupName.'", id="'.$radioId.$i.'" value="'.$radioId.$i.'>';
        $label = '<label for="'.$radioId.$i.'>'.$i.'</label>';
        echo "<div>";
        echo $hiddenRadioInput;
        echo $label;
        echo "</div>";
    }
}
?>