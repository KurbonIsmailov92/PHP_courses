<?php error_reporting(-1);

//$arr1 = array();
//$arr2 = [];

//$arr1 = [
//    1 => 'Tom',
//    3 => 'Jerry',
//];
//var_dump($arr1);

//$arr1[5] = 'Pluto';
//$arr1[] = 'Doe';
//$arr1[] = 10;
//$arr1[8.7] = 7.45;



//echo $arr1[3];
//echo $arr1[2];

//echo $arr1{1};

$goods = [
    [
        'title' => 'Nokia',
        'price' => 100,
        'qty'   => 10,
    ],
    [
        'title' => 'Sony',
        'price' => 130,
        'qty'   => 8,
    ],
];

echo '<pre>' . print_r($goods, 1) . '</pre>';
echo $goods[0]['title'];

for ($i = 1; $i < 11; $i++) {
    $nums[] = $i;
}
echo '<pre>' . print_r($nums, 1) . '</pre>';