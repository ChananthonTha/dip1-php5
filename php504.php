<?php
$name = array("Thailand","Malaysia");
$emp = array
(
    array(1,"Thailand",66),
    array(2,"Singapore",55),
    array(3,"Malaysia",44),
);

for($row=0;$row<=2;$row++){
    for($col=0;$col<=2;$col++){
        echo $emp[$row][$col];
    }
    echo "<br />";
}

foreach($name as $i){
    echo $i."<br />";
}

echo "<h1>";
foreach ($emp as $value) {
    echo $value[0]."<br />";
    echo $value[1]."<br />";
    echo $value[2]."<br />";
}
echo "</h1>";