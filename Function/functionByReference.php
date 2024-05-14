<?php
function testing(&$string){
    $string .= "And somthing extra";
}

$str = "This is string";
testing($str);
echo $str;
echo "<br>";




?>