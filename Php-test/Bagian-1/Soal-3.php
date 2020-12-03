<?php
$str = "Jakarta adalah ibukota negara Republik Indonesia";
$kal = explode(" ",strtolower($str));
//
echo "Unigram = ";
echo implode(", ",$kal);
echo "<br>";
echo "Bigram = ";
$length = count($kal);
$kata = 0;
for($x = 1; $x <= $length; $x++) {
  if($x % 2 == 0 && $x != $length){
    echo $kal[$kata].", ";
    $kata++;
  } else {
    echo $kal[$kata]." ";
    $kata++;
  }
  
}
echo "<br>";
echo "Trigram = ";
$length = count($kal);
$kata = 0;
for($x = 1; $x <= $length; $x++) {
  if($x % 3 == 0 && $x != 6){
    echo $kal[$kata].", ";
    $kata++;
  } else {
    echo $kal[$kata]." ";
    $kata++;
  }
  
}
?>