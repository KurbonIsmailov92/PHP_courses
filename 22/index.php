<?php error_reporting(-1);

$nums = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10,];

//$i = 0;
//while ($i < 10) {
//    echo $nums [$i] . '<br>';
//    $i++;
//}

//for ($i = 0; $i < 10; $i++) {
//    echo $nums [$i] . '<br>';
//}

//foreach ($nums as $num) {
//    echo $num . '<br>';
//}

//foreach ($nums as $k => $v) {
//    echo "Key: $k, Value: $v <br>";
//}

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
    [
        'title' => 'LG',
        'price' => 150,
        'qty'   => 9,
    ],
];

//echo '<pre>' . print_r($goods, 1) . '</pre>';

//for ($i = 0; $i < 3; $i++) {
//    echo "<hr>";
//    echo "Наименование товара: {$goods[$i]['title']} <br>";
//    echo "Цена товара: {$goods[$i]['price']} <br>";
//    echo "Количество товара: {$goods[$i]['qty']} <br>";
//    echo "<hr>";
//}

//foreach ($goods as $good) {
//    echo '<hr>';
//    echo "Наименование товара: {$good['title']} <br>";
//    echo "Цена товара: {$good['price']} <br>";
//    echo "Количество товара: {$good['qty']} <br>";
//    echo '<hr>';
//}

//for ($i = 0; $i < 3; $i++) {
////    $goods[$i]['total'] = $goods[$i]['price'] * $goods[$i]['qty'];
//    $goods[$i]['price'] *= 2;
//}

foreach ($goods as &$good) {
    $good['price'] *= 2;
}

echo '<pre>' . print_r($goods, 1) . '</pre>';
