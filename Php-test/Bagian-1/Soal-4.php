<html>
<body>


<table>
<tr>
<?php 

for($x = 1; $x <= 64; $x++){
    
    if($x % 3 == 0 OR $x % 4 == 0){
        echo "<td style=' padding:5px;'>$x</td>";
    } 
    else{
    echo "<td style='background:black; color:white; padding:5px;'>$x</td>";
    }

    if($x % 8 == 0){
        echo "</tr><tr>";}
}

?>
</tr>
</table>

    
</body>
</html>