<?php declare(strict_types= 1); // strict requirement
//FUNCTIONS
//a function name must start with a letter or an underscore

function writeMsg(){
    echo "hello world";
}
writeMsg();
echo "<hr>";
//php function arguments
function familyname($fname){
    echo "$fname koech.<br>";
}
familyname("Jane");
familyname("Harry");
familyname("Stacy");
familyname("Kai");
familyname("Kip");
echo "<hr>";
function familynae($fname, $year){
    echo "$fname Refsnes. Born in $year <br>";
}
familynae("Hege", "1975");
familynae("Stale", "1978");
familynae("Kai Jim", "1983");
echo "<hr>";

function addNumbers(int $a, int $b){
    return $a + $b;
}
echo addNumbers(5,50);
echo "<hr>";

function setHeight(int $minheight = 50) {
    echo "The height is : $minheight <br>";
}

setHeight(350);
setHeight();
setHeight(135);
setHeight(80);

//to let a function return a value, use the return statement
function sum(int $x, int $y) {
    $z = $x + $y;
    return $z;
}
echo "5 + 10 =". sum(5,10) ."<br>";
echo "7 + 13 =". sum(7,13) ."<br>";
echo "2 + 4 =". sum(2,4) ."";

