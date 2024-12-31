<?php
$T = [];
for ($i = 0; $i < 10; $i++) {
    $T[$i] = rand(40, 60);
}
var_dump($T);

/*foreach($T as $S){
    echo $S.' ';
}*/

$T1 = [];
$T2 = [];
$j = 0;
$k = 0;
for ($i = 0; $i < 10; $i++) {
    if ($T[$i] < 50) {
        $T1[$j] = $T[$i];
        $j++;
    } else {
        $T2[$k] = $T[$i];
        $k++;
    }
}

var_dump($T1);
var_dump($T2);
?>
