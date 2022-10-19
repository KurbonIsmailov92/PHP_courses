<?php error_reporting(-1);
//function myFunc () {
//    echo '<p>Hello, World!</p>';
//};
//myFunc();
//myFunc();
//myFunc();
//myFunc();

//function hello ($name = 'Guest')
//{
//    echo "<p>Hello, {$name}</p>";
//}
//
//$name = 'John';
////hello('John');
//hello('Jack');

//function sum($a = 1, $b, $c = 2)
//{
//    echo ($a + $b) * $c;
//}
//sum(1,2);
/*
$a = 5;

function test($a)
{
    global $a;
    $a += 10;
    var_dump($a);
}
var_dump($a);
test($a);
var_dump($a);*/


function test(&$num)
{
    $num += 10;
}
$num = 10;
var_dump($num);
test($num);
var_dump($num);