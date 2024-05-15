<?php

/*

                                                  Time(format)

Hour                           Minute                             Second                      Meridiedm
h (01 to 12)                   i (00 to 59)               s (00 to 59)                   a (am or pm)
H (00 to 23)                                                                             A (AM orPM)
g (1 to 12)                                                                       
G (0 to 23)                                                                         
*/



echo "Hour is " . date("h") . "<br>"; 
echo "Hour is " . date("H") . "<br>"; 
echo "Hour is " . date("g") . "<br>"; 
echo "Hour is " . date("G") . "<br>"; 
echo "<br>";

echo "Minute is " . date("i") . "<br>";
echo "<br>";

echo "seconds is " . date("s") . "<br>";
echo "<br>";

echo "Meridiedm is " . date("a") . "<br>";
echo "Meridiedm is " . date("A") . "<br>";
echo "<br>";

echo "time is " . date("h:i:sa") . "<br>";


date_default_timezone_set("Asia/Kolkata");
echo "time is " . date("h:i:sa") . "<br>";
echo "time is " . date("H:i:sa") . "<br>";























?>