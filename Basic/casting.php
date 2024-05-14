<?php
$a = 10;
$b = "Harsh";
$c = 39.99;
$d = true;
$e = null;
$f = 5.38;
$f = 5.3;


$a = (bool) $a;
$b = (float) $b;
$c = (string) $c;
$d = (int) $d;
$e = (string) $e;
$f = (array) $f;
$g = (object) $g;

var_dump($a);
echo "<br>";
var_dump($b);
echo "<br>";
var_dump($c);
echo "<br>";
var_dump($d);
echo "<br>";
var_dump($e);
echo "<br>";
var_dump($f);
echo "<br>";
var_dump($g);
?>