<?php

print "hello php";

echo "Mindset scrambled", "i have a mega mind";
echo "<br>";
$sam="gor";
$a=23;
$b="Albert";
$c=233.44;

echo "At the age of".$a,"the boy".$b,"weighed".$c,"Kgs";
echo "<br>";

$d=5;
$e=6;
$temp=0;
echo"sum of d and e".($d+$e);
echo "<br>";
echo "the value of b is".$b;
echo "<br>";
$temp=$d;
$d=$e;
$e=$temp;
echo"value of d after swap".$d;
echo "<br>";
echo "value of e after swap".$e;
echo "<br>";
$d=$d+$e;
$e=$d-$e;
$d=$d-$e;
echo "value of d".$d;
echo "<br>";
echo "value of e".$e;
?>
