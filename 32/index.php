<?php error_reporting(-1); //Домашка по функциям строк

function str_count(string $str, string $substr):int
{
    return substr_count($str,$substr);
}

$str = 'Hello';
$substr = "l";

//echo str_count($str, $substr);


function no_space(string $str):string
{
    return str_replace(' ', '',$str);
}

$test = '  jh lkdf    ';

//echo no_space($test);

function max_number(int $number):int
{
    $mass = str_split($number);
    rsort($mass);
    return (int) implode($mass) ;
}

$nums = 5812;
echo max_number($nums);