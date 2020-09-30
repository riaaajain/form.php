<?php

echo "Hello World";
echo '<hr>';

$color = 'red';
echo "my car is of " . $color . " color <br> <hr>";

$name = "John";
echo "My name is $name <br> <hr>";

$num1 = 5;
$num2 = 10;
$num3 = $num1 + $num2;
echo "ans is $num3 <br> <hr>";

echo strlen("I am from India. ");
echo "<br> <hr>";

echo str_word_count("I am from India. ");
echo "<br> <hr>";

// for($i = 0; $i < 10; $i++){
//     echo $i + 2 . "<br> ";
// }
// echo "<br> <hr>";

// $a = 1;
// while($a <= 10){
//     echo $a . "<br>";
//     $a++;
// }

$x = 58.66;
var_dump($x);

// $z = 38.666555;
// $int_cast = (int)$z;
// echo $int_cast . "<br>";

// echo pi() . "<br>";

echo (min(0, 150, 45, 220)) . "<br>";

echo (abs( -7.66)) . "<br>";

// echo rand(10,100) . "<br>";

// $t = date("H");
// if($t < "20") {
//     echo "Have a Good day";
// }
// echo $t;
$a = 5;
$b = 10;

if($a == $b){
    echo "1";
}
elseif($a>$b){
    echo "2";
}
else{
    echo "3";
}
// echo ."<br>";

// $arr = array("john","Jacob",)
?>