<?php

$randomArray = [
    ["f", "g", "h", "i"],
    ["j", "k", "p", "q"],
    ["r", "s", "t", "u"],
];

$arr = array();

for ($i = 0; $i < count($randomArray); $i++) {

    // if(is_array($randomArray[$i])){
    for ($j = 0; $j < count($randomArray[$i]); $j++) {
        array_push($arr, $randomArray[$i][$j]);
    }
    //   }

}

$input = str_split("fgrs");

$success = 0;
for ($i = 0; $i < count($input); $i++) {
    $find = array_search($input[$i], $arr);

    if ($find >= 0) {
        $success++;
        if ($success == count($input)) {
            echo "true";
        }
    } else {
        echo "false";
        break;
    }
}
