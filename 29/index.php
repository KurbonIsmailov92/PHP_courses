<?php error_reporting(-1);

function debug($data)
{
    echo '<pre>' . print_r($data, 1) . '</pre>';
}

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

$car = [
    'brand' => 'Toyota',
    'model' => 'Camry',
    'year'  => 2021,
    'speed' => 220,
    'wheels' => 4,
];

$nums = [1,2,3,4,1,5,6,8,4,6,6,8,4,6,5,];

echo count($goods,1);
debug(array_count_values($nums));
var_dump(array_key_exists('year', $car ));
function odd ($var)
{
    return $var % 2;
}

function even ($var)
{
    return !($var % 2);
}

debug(array_filter($nums, 'odd'));
debug(array_filter($nums, function ($var) {
    return !($var % 2);
}));