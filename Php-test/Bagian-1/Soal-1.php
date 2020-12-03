<?php
$nilai = array("72", "65", "73", "78", "75", "74", "90", "81", "87", "65", "55", "69", "72", "78", "79", "91", "100", "40", "67", "77", "86");
rsort($nilai);
$nilai_tertinggi = $nilai;
sort($nilai);
$nilai_terendah = $nilai;
$rata_rata = round(array_sum($nilai)/count($nilai));
//
echo "Data Nilai = ";
foreach($nilai as $data){
    echo $data . " ";
}
echo "<br>"; 
echo "(1) Nilai rata - rata = " . $rata_rata;
echo "<br>"; 
echo "(2) Nilai Teringgi = ";
for($x = 0; $x < 7; $x++) {
  echo $nilai_tertinggi[$x]." ";
}
echo "<br>";
echo "(3) Nilai Terendah = ";
for($x = 0; $x < 7; $x++) {
  echo $nilai_terendah[$x]." ";
}
?>