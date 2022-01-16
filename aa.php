<?php
$read = explode("\n", file_get_contents("x.txt"));
$y = [" ",".","-"];
$x   = ["1","0"," "]; 
$str = str_replace($y, $x, $read);

foreach($str as $x)
echo $x;
?>