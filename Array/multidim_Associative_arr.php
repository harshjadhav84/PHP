<?php

$marks = [
    "Krishna" => [
        "Physics" => 85,
        "Chemistry" => 89,
        "Math" => 78
    ],
    "Salman" => [
        "Physics" => 68,
        "Chemistry" => 79,
        "Math" => 73
    ],
    "Mohan" => [
        "Physics" => 62,
        "Chemistry" => 92,
        "Math" => 67
    ]
    ];


//simple printing array
echo "<pre>";
    print_r($marks);
echo "</pre>";

//printing array in table format.
echo "<table border = '2px' cellpadding = '5px' cellspacing= '0' >
<tr>
<th>Student name</th>
<th>Physics</th>
<th>chemistry</th>
<th>maths</th>
</tr>";
//printing array using foreach loop
foreach($marks as $key =>$v1){
    echo "<tr>
            <td>$key</td>" ;
    foreach($v1 as $v2){
        echo "<td>
        $v2 </td> ";
    }
    echo "</tr>";
}
echo "</table>";


//printing by as list 

?>