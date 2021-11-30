<?php
echo "<h1>";
$season = array("Summer","Winter","Spring","Autumn");

$season[4] = "Special";

echo $lenght = count($season);

// echo "$season[0]<br />";
// echo "$season[1]<br />";
// echo "$season[2]<br />";
// echo "$season[3]<br />";
// echo "$season[4]<br />";
for($i = 0;$i<=$lenght-1; $i = $i+1){
    echo $season[$i]. ",";
}
echo "<h1>";