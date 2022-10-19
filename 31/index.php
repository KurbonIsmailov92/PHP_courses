<?php error_reporting(-1); //функции для работы со строками

function debug($data)
{
    echo '<pre>' . print_r($data, 1) . '</pre>';
}

$str = ' Hello, world! ';
$str2 = 'Привет, мир!';
$str3 = "<script>alert('©Hello &gt;' + \" world\")</script> ";
$str4 = "Привет!\nВо первых строках своего письма...";

//echo strlen($str);
//echo mb_strlen($str2);
//echo htmlspecialchars($str3,ENT_QUOTES, double_encode: false);
//echo htmlentities($str3);
//echo strlen($str4);
//echo trim($str,'H ');
//echo nl2br($str4);
//var_dump(substr($str,-7,5));

