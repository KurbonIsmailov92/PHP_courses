<?php

error_reporting(-1);

/**
 * Дан массив:
 * $nums = [21,,3,4,5,6,7,8,9,10];
 * В цикле for выведите только четные числа массива. Попробуйте решить задачу двумя способами: с использованием continue и без него.
 */
$nums = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

echo '<pre>' . print_r($nums, 1) . '</pre>';

for ($i = 0; $i < 10; $i++) {
    if ($nums[$i] % 2 != 0) {
        continue;
    } else {
        echo $nums[$i] . '<br>';
    }
}

echo "<br>";

for ($i = 0; $i < 10; $i++) {
    if ($nums[$i] % 2 == 0) {
        echo $nums[$i] . '<br>';
    }
}

echo "<br>";

for ($i = 1; $i < 10; $i+=2) {
    if ($nums[$i] % 2 == 0) {
        echo $nums[$i] . '<br>';
    }
}



/**
 *
 *
 * Дан массив:
 * $goods = [
 * [
 * 'title' => 'Nokia',
 * 'price' => '100',
 * 'qty' => '10',
 * ],
 * [
 * 'title' => 'Sony',
 * 'price' => '120',
 * 'qty' => '7',
 * ],
 * [
 * 'title' => 'LG',
 * 'price' => '105',
 * 'qty' => '15',
 * ],
 * ];
 * Увеличьте стоимость товара на 15, если цена < 120. Решите задачу двумя способами: с помощью цикла for и цикла foreach.
 */

$goods = [
  [
  'title' => 'Nokia',
  'price' => '100',
  'qty' => '10',
  ],
  [
  'title' => 'Sony',
  'price' => '120',
  'qty' => '7',
  ],
  [
  'title' => 'LG',
  'price' => '105',
  'qty' => '15',
  ],
  ];

//for ($i = 0; $i < 3; $i++) {
//    if ($goods[$i]['price'] >= 120 ) {
//        continue;
//    }else{
//        $goods[$i]['price'] += 15;
//    }
//}

foreach ($goods as &$good) {
    if ($good['price'] >= 120 ) {
        continue;
    }else{
        $good['price'] += 15;
    }
}

echo '<pre>' . print_r($goods, 1) . '</pre>';
