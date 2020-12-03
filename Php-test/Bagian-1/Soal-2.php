<?php
$input = "TranSISI";
$str = str_split($input); 
$total = 0;
//
foreach ($str as $x) {
  if (ctype_lower($x)) {
     $total ++;
  }else {
     
  }
  
}
echo "$input mengandung $total buah huruf kecil";
?>