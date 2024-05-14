<?php

$emp = [
    [1, "Krishna", "Mabager", 50000],
    [2, "Salman", "Salesman", 20000],
    [3, "Mohan", "Computer Operator", 12000],
    [4, "Amir", "Driver", 5000]
];

//printing by simple method
echo $emp[2][2];
echo "<pre>";
print_r($emp);
echo "</pre>";

//printing array using for loop
for($row = 0; $row < 4;$row++){
    for($col = 0; $col < 4; $col++){
        echo $emp[$row][$col]. " ";
    }
    echo "<br>";
}
echo "<br>";

//printing array using foreach loop
foreach($emp as $v1){
    foreach($v1 as $v2){
        echo $v2." ";
    }
    echo "<br>";
}
echo "<br>";


//printing as list 
foreach($emp as list($id, $name,$designation,$salary)){
    echo "$id $name $designation $salary <br>";
}
?>