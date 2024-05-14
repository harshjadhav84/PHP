<?php
function sum($a, $b){
    $c = "$a + $b <br>" ;
    return $c;
}
echo sum(10,20);


function marks($marathi, $hindi, $english, $maths, $sci, $civics){
    $percentage = ($marathi +$hindi+ $english+ $maths+ $sci+ $civics) / 6;
    return $percentage;
}
$total = marks(85, 87, 89, 87, 90, 84);
echo $total;
?>