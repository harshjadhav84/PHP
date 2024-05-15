<?php
/*

                                                  date(format)

Day                              Month                             Year                                 Week                                                  
d (01 to 31)                   F (full like january)               Y (full like 2019)                   D (Mon)
j (1 to 31)                    m (01)                              y (short like 19)                    l (Monday)
s (st, nd, rd, th)             M (jan)                                                                  N (1)
                               n (1)                                                                    W (01)
*/


echo "Today is " . date("d") . "<br>";
echo "Today is " . date("j") . "<br>";
echo "Today is " . date("jS") . "<br>";

echo "month is " . date("F") . "<br>";
echo "month is " . date("m") . "<br>";
echo "month is " . date("M") . "<br>";
echo "month is " . date("n") . "<br>";

echo "year is " . date("Y") . "<br>";
echo "year is " . date("y") . "<br>";

echo "week is " . date("D") . "<br>";
echo "week is " . date("l") . "<br>";
echo "week is " . date("N") . "<br>";
echo "week is " . date("W") . "<br>";

echo "full date is " . date("d/m/Y") . "<br>";
echo "full date is " . date("d/m-Y") . "<br>";
echo "full date is " . date("d/F/y") . "<br>";
echo "full date is " . date("F/d/y") . "<br>";

echo "days of month " . date("t") . "<br>";
echo "days is " . date("z") . "<br>";









?>