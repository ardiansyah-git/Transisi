<?php
$input =  "dfhknq";
$alfabet = array("a", "b", "c", "d", "e", "f", "g", "h", "i", "j", "k", "l", "m", "n", "o", "p", "q", "r", "s", "t", "u", "v", "w", "x", "y", "z");
// echo array_search("c", $alfabet);

$res = array();

for ($i = 0; $i < strlen($input); $i++) {
    $position = array_search($input[$i], $alfabet);
    if ($i % 2 == 0) {
        echo $alfabet[$position + ($i + 1)];
    } else {
        echo $alfabet[$position - ($i + 1)];
    }
}


?>