<?php error_reporting(-1);

 $i = '2';

//$res = match ($i) {
//    1 => 'One',
//    2 => 'Two',
//    3 => 'Three',
//    4 => 'Four',
//    5 => 'Five',
//
//};


$res = match ($i) {
    1, 2, 3 => 'Var < 4',
//    2 => 'Two',
//    3 => 'Three',
    4 => 'Four',
    default => 'Var > 4',
};
//$grade = 2;
//$res = match (true) {
//    ($grade >= 10)  => "Exellent",
//    ($grade >= 7)   => "Good",
//    ($grade >= 4)   => "Bad",
//    default         => "Very bad",
//};
//echo $res;

//$grade = 10;
//$res = match (true) {
//    ($grade >= 10)  && ($grade < 13)  => "Exellent",
//    ($grade >= 7)   && ($grade < 10)  => "Good",
//    ($grade >= 4)   && ($grade < 7)   => "Bad",
//    default                           => "Very bad",
//};
echo $res;
