<?php

//While loop
$x = 1;

while($x <= 18){
    echo "The number is:.$x <br>";
    $x++;
}
?>
<hr>
<?php
$x = 1;
do {
    echo "The number is: $x <br>";
    $x++;
} while($x <= 5);
?>
<hr>


<!--For loop-->
<?php
for ($x = 0; $x <=10; $x++) {
    echo "The number is: $x <br>";
}
?>
<hr>
<?php
$colors = array("red","green","blue","yellow");

foreach ($colors as $value) {
    echo "$value <br>";
}
echo "<hr>";


$age=array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
foreach ($age as $x => $val) {
    echo "$x = $val<br>";
}
echo "<hr>";


//Arrays= stores multiple values in one single variable //
//indexed arrays
$car = array("volvo", "BMW", "Toyota");
echo "I like ".$car[0].", &nbsp".$car[1]."&nbsp and".$car[2].".";
echo "<br>";
echo "Number of Cars is &nbsp";
echo count($car);
sort($car);
echo "<hr>";
//how to loop indexed arrays
$car = array("volvo", "BMW", "Toyota", "Lexus");
$arraylength = count($car);

for ($x = 1; $x < $arraylength; $x++){

    echo $car[$x];
    echo "<br>";
}
echo "<hr>";
$fruits = array("Banana", "Apple", "Lemon", "Melon", "Orange");
echo "the second elemnt is=".$fruits[1];
echo "<hr>";

//Associative arrays
//looping through an associative array
$age = array("Peter"=>"35", "Ben"=>"37");

foreach ($age as $x => $value){
    echo "key=".$x.",&nbsp Value=".$value;
    echo "<br>";
}




echo "<hr>";
$edibles = array("banana"=>"fruit", "kales"=>"vegetables", "meat"=>"proteins");

foreach ($edibles as $x => $value){
    echo "Food=".$x.",&nbsp category=".$value;
    echo "<br>";
}
echo "<hr>";
$cars = array(
        array("volvo",22,18),array("BMW",15,13),array("Saab",5,2));
echo $cars[0][0].": In stock: ".$cars[0][1].",sold: ".$cars[0][2].".<br>";

echo $cars[1][0].": In stock: ".$cars[1][1].",sold: ".$cars[1][2].".<br>";

echo $cars[2][0].": In stock: ".$cars[2][1].",sold: ".$cars[2][2].".<br>";
//Loop
for ($row = 0; $row < 3; $row++) {
    echo "<p><b> row number $row</b></p>";
    echo "<ul>";


     //loop through columns
    for ($col = 0; $col < 3; $col++) {
        echo "<li>" . $cars[$row][$col] . "</li>";
    }
    echo "</ul>";

}
echo "<hr>";
$car = array("Volvo", "BMW", "Toyota");
rsort($car);

$clength = count($car);
for($x = 0; $x < $clength; $x++){
    echo $car[$x];
    echo "<br>";
}
echo "<hr>";
//sorting an array according to ascending value
$age = array("peter"=>"75", "ben"=>"37", "joe"=>"43");
asort($age);

foreach ($age as $x => $x_value){
    echo "key=". $x . ", value=" . $x_value;
    echo "<br>";
}
echo "<hr>";
//sorting according to key
$age = array("peter"=>"75", "ben"=>"37", "joe"=>"43");
ksort($age);

foreach ($age as $x => $x_value){
    echo "key=". $x . ", value=" . $x_value;
    echo "<br>";
}
echo "<hr>";
//sorting according to descending value
$age = array("peter"=>"75", "ben"=>"37", "joe"=>"43");
arsort($age);

foreach ($age as $x => $x_value){
    echo "key=". $x . ", value=" . $x_value;
    echo "<br>";
}
echo "<hr>"
//sorting in descending order according to key
$age = array("peter"=>"75", "ben"=>"37", "joe"=>"43");
krsort($age);

foreach ($age as $x => $x_value){
    echo "key=". $x . ", value=" . $x_value;
    echo "<br>";
}
//sort()=sorts an array in an ascending order
//rsort()
//types of arrays
//  indexed
//Associative
//Multidimensional
//     --------2d------------
//     --------3d------------
    ?>
